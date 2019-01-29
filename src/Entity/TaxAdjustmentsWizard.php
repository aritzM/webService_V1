<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxAdjustmentsWizard
 *
 * @ORM\Table(name="tax_adjustments_wizard", indexes={@ORM\Index(name="IDX_2A96AA307C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2A96AA304C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_2A96AA30B2A824D8", columns={"tax_id"}), @ORM\Index(name="IDX_2A96AA3021F539EE", columns={"company_currency_id"}), @ORM\Index(name="IDX_2A96AA306813E404", columns={"credit_account_id"}), @ORM\Index(name="IDX_2A96AA30204C4EAA", columns={"debit_account_id"}), @ORM\Index(name="IDX_2A96AA30478E8802", columns={"journal_id"})})
 * @ORM\Entity
 */
class TaxAdjustmentsWizard
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tax_adjustments_wizard_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", nullable=false, options={"comment"="Justification"})
     */
    private $reason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Amount"})
     */
    private $amount;

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
     * @var \AccountTax
     *
     * @ORM\ManyToOne(targetEntity="AccountTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_id", referencedColumnName="id")
     * })
     */
    private $tax;

    /**
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_currency_id", referencedColumnName="id")
     * })
     */
    private $companyCurrency;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="credit_account_id", referencedColumnName="id")
     * })
     */
    private $creditAccount;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="debit_account_id", referencedColumnName="id")
     * })
     */
    private $debitAccount;

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
