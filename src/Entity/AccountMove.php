<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountMove
 *
 * @ORM\Table(name="account_move", indexes={@ORM\Index(name="account_move_date_index", columns={"date"}), @ORM\Index(name="IDX_63ADB0D27C455263", columns={"write_uid"}), @ORM\Index(name="IDX_63ADB0D24C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_63ADB0D2FB003A01", columns={"tax_cash_basis_rec_id"}), @ORM\Index(name="IDX_63ADB0D2979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_63ADB0D29393F8FE", columns={"partner_id"}), @ORM\Index(name="IDX_63ADB0D238248176", columns={"currency_id"}), @ORM\Index(name="IDX_63ADB0D2478E8802", columns={"journal_id"})})
 * @ORM\Entity
 */
class AccountMove
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_move_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Number"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", nullable=true, options={"comment"="Reference"})
     */
    private $ref;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount"})
     */
    private $amount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="narration", type="text", nullable=true, options={"comment"="Internal Note"})
     */
    private $narration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matched_percentage", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Percentage Matched"})
     */
    private $matchedPercentage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Created on"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true, options={"comment"="Last Updated on"})
     */
    private $writeDate;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="write_uid", referencedColumnName="id")
     * })
     */
    private $writeUid;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_uid", referencedColumnName="id")
     * })
     */
    private $createUid;

    /**
     * @var \AccountPartialReconcile
     *
     * @ORM\ManyToOne(targetEntity="AccountPartialReconcile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_cash_basis_rec_id", referencedColumnName="id")
     * })
     */
    private $taxCashBasisRec;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_id", referencedColumnName="id")
     * })
     */
    private $journal;


}
