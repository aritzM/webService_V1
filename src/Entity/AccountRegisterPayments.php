<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountRegisterPayments
 *
 * @ORM\Table(name="account_register_payments", indexes={@ORM\Index(name="IDX_1E453A9B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_1E453A9B4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_1E453A9B478E8802", columns={"journal_id"}), @ORM\Index(name="IDX_1E453A9B38248176", columns={"currency_id"}), @ORM\Index(name="IDX_1E453A9B9393F8FE", columns={"partner_id"}), @ORM\Index(name="IDX_1E453A9B5AA1164F", columns={"payment_method_id"})})
 * @ORM\Entity
 */
class AccountRegisterPayments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_register_payments_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="multi", type="boolean", nullable=true, options={"comment"="Multi"})
     */
    private $multi;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", nullable=false, options={"comment"="Payment Type"})
     */
    private $paymentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_type", type="string", nullable=true, options={"comment"="Partner Type"})
     */
    private $partnerType;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Payment Amount"})
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="date", nullable=false, options={"comment"="Payment Date"})
     */
    private $paymentDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="communication", type="string", nullable=true, options={"comment"="Memo"})
     */
    private $communication;

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
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_id", referencedColumnName="id")
     * })
     */
    private $journal;

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
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var \AccountPaymentMethod
     *
     * @ORM\ManyToOne(targetEntity="AccountPaymentMethod")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_method_id", referencedColumnName="id")
     * })
     */
    private $paymentMethod;


}
