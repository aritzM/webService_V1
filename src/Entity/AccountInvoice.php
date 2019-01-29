<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvoice
 *
 * @ORM\Table(name="account_invoice", uniqueConstraints={@ORM\UniqueConstraint(name="account_invoice_number_uniq", columns={"number", "company_id", "journal_id", "type"})}, indexes={@ORM\Index(name="account_invoice_type_index", columns={"type"}), @ORM\Index(name="account_invoice_date_due_index", columns={"date_due"}), @ORM\Index(name="account_invoice_state_index", columns={"state"}), @ORM\Index(name="account_invoice_name_index", columns={"name"}), @ORM\Index(name="account_invoice_date_invoice_index", columns={"date_invoice"}), @ORM\Index(name="account_invoice_move_id_index", columns={"move_id"}), @ORM\Index(name="IDX_594E030C7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_594E030C4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_594E030C3BE01AF7", columns={"cash_rounding_id"}), @ORM\Index(name="IDX_594E030C89484BF6", columns={"commercial_partner_id"}), @ORM\Index(name="IDX_594E030C44651717", columns={"fiscal_position_id"}), @ORM\Index(name="IDX_594E030CA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_594E030CD622985C", columns={"partner_bank_id"}), @ORM\Index(name="IDX_594E030C979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_594E030C478E8802", columns={"journal_id"}), @ORM\Index(name="IDX_594E030C38248176", columns={"currency_id"}), @ORM\Index(name="IDX_594E030C9B6B5FBA", columns={"account_id"}), @ORM\Index(name="IDX_594E030C17653B16", columns={"payment_term_id"}), @ORM\Index(name="IDX_594E030C9393F8FE", columns={"partner_id"}), @ORM\Index(name="IDX_594E030CCA738251", columns={"refund_invoice_id"})})
 * @ORM\Entity
 */
class AccountInvoice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_invoice_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Reference/Description"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origin", type="string", nullable=true, options={"comment"="Source Document"})
     */
    private $origin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", nullable=true, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="access_token", type="string", nullable=true, options={"comment"="Security Token"})
     */
    private $accessToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", nullable=true, options={"comment"="Number"})
     */
    private $number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="move_name", type="string", nullable=true, options={"comment"="Journal Entry Name"})
     */
    private $moveName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", nullable=true, options={"comment"="Vendor Reference"})
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_type", type="string", nullable=false, options={"comment"="Payment Reference"})
     */
    private $referenceType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", nullable=true, options={"comment"="Additional Information"})
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sent", type="boolean", nullable=true, options={"comment"="Sent"})
     */
    private $sent;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_invoice", type="date", nullable=true, options={"comment"="Invoice Date"})
     */
    private $dateInvoice;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_due", type="date", nullable=true, options={"comment"="Due Date"})
     */
    private $dateDue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true, options={"comment"="Accounting Date"})
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_untaxed", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Untaxed Amount"})
     */
    private $amountUntaxed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_untaxed_signed", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Untaxed Amount in Company Currency"})
     */
    private $amountUntaxedSigned;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_tax", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Tax"})
     */
    private $amountTax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_total", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Total"})
     */
    private $amountTotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_total_signed", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Total in Invoice Currency"})
     */
    private $amountTotalSigned;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_total_company_signed", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Total in Company Currency"})
     */
    private $amountTotalCompanySigned;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reconciled", type="boolean", nullable=true, options={"comment"="Paid/Reconciled"})
     */
    private $reconciled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residual", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount Due"})
     */
    private $residual;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residual_signed", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount Due in Invoice Currency"})
     */
    private $residualSigned;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residual_company_signed", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount Due in Company Currency"})
     */
    private $residualCompanySigned;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activity_date_deadline", type="date", nullable=true, options={"comment"="Next Activity Deadline"})
     */
    private $activityDateDeadline;

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
     * @var \AccountCashRounding
     *
     * @ORM\ManyToOne(targetEntity="AccountCashRounding")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cash_rounding_id", referencedColumnName="id")
     * })
     */
    private $cashRounding;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commercial_partner_id", referencedColumnName="id")
     * })
     */
    private $commercialPartner;

    /**
     * @var \AccountFiscalPosition
     *
     * @ORM\ManyToOne(targetEntity="AccountFiscalPosition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fiscal_position_id", referencedColumnName="id")
     * })
     */
    private $fiscalPosition;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \ResPartnerBank
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerBank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_bank_id", referencedColumnName="id")
     * })
     */
    private $partnerBank;

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
     * @var \AccountMove
     *
     * @ORM\ManyToOne(targetEntity="AccountMove")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_id", referencedColumnName="id")
     * })
     */
    private $move;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

    /**
     * @var \AccountPaymentTerm
     *
     * @ORM\ManyToOne(targetEntity="AccountPaymentTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_term_id", referencedColumnName="id")
     * })
     */
    private $paymentTerm;

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
     * @var \AccountInvoice
     *
     * @ORM\ManyToOne(targetEntity="AccountInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refund_invoice_id", referencedColumnName="id")
     * })
     */
    private $refundInvoice;


}
