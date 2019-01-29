<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountPayment
 *
 * @ORM\Table(name="account_payment", indexes={@ORM\Index(name="IDX_A4039045118A5D1", columns={"payment_token_id"}), @ORM\Index(name="IDX_A4039045CAE8710B", columns={"payment_transaction_id"}), @ORM\Index(name="IDX_A40390457C455263", columns={"write_uid"}), @ORM\Index(name="IDX_A40390454C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_A4039045478E8802", columns={"journal_id"}), @ORM\Index(name="IDX_A403904538248176", columns={"currency_id"}), @ORM\Index(name="IDX_A40390459393F8FE", columns={"partner_id"}), @ORM\Index(name="IDX_A40390455AA1164F", columns={"payment_method_id"}), @ORM\Index(name="IDX_A40390456C6E2266", columns={"writeoff_account_id"}), @ORM\Index(name="IDX_A40390451AB713B0", columns={"destination_journal_id"}), @ORM\Index(name="IDX_A4039045979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class AccountPayment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_payment_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", nullable=false, options={"comment"="Payment Type"})
     */
    private $paymentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_reference", type="string", nullable=true, options={"comment"="Payment Reference"})
     */
    private $paymentReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="move_name", type="string", nullable=true, options={"comment"="Journal Entry Name"})
     */
    private $moveName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_difference_handling", type="string", nullable=true, options={"comment"="Payment Difference"})
     */
    private $paymentDifferenceHandling;

    /**
     * @var string|null
     *
     * @ORM\Column(name="writeoff_label", type="string", nullable=true, options={"comment"="Journal Item Label"})
     */
    private $writeoffLabel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

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
     * @var \PaymentToken
     *
     * @ORM\ManyToOne(targetEntity="PaymentToken")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_token_id", referencedColumnName="id")
     * })
     */
    private $paymentToken;

    /**
     * @var \PaymentTransaction
     *
     * @ORM\ManyToOne(targetEntity="PaymentTransaction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_transaction_id", referencedColumnName="id")
     * })
     */
    private $paymentTransaction;

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

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="writeoff_account_id", referencedColumnName="id")
     * })
     */
    private $writeoffAccount;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="destination_journal_id", referencedColumnName="id")
     * })
     */
    private $destinationJournal;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
