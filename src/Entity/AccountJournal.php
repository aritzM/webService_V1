<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountJournal
 *
 * @ORM\Table(name="account_journal", uniqueConstraints={@ORM\UniqueConstraint(name="account_journal_code_company_uniq", columns={"code", "name", "company_id"})}, indexes={@ORM\Index(name="account_journal_company_id_index", columns={"company_id"}), @ORM\Index(name="IDX_88CF3057C455263", columns={"write_uid"}), @ORM\Index(name="IDX_88CF3054C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_88CF30512CB990C", columns={"bank_account_id"}), @ORM\Index(name="IDX_88CF305CD1C895F", columns={"loss_account_id"}), @ORM\Index(name="IDX_88CF305AAB99F46", columns={"profit_account_id"}), @ORM\Index(name="IDX_88CF30538248176", columns={"currency_id"}), @ORM\Index(name="IDX_88CF30547780C1E", columns={"refund_sequence_id"}), @ORM\Index(name="IDX_88CF30598FB19AE", columns={"sequence_id"}), @ORM\Index(name="IDX_88CF305AFB186FD", columns={"default_debit_account_id"}), @ORM\Index(name="IDX_88CF3059D93DD9B", columns={"default_credit_account_id"})})
 * @ORM\Entity
 */
class AccountJournal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_journal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Journal Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=5, nullable=false, options={"comment"="Short Code"})
     */
    private $code;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="update_posted", type="boolean", nullable=true, options={"comment"="Allow Cancelling Entries"})
     */
    private $updatePosted;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_invoice_lines", type="boolean", nullable=true, options={"comment"="Group Invoice Lines"})
     */
    private $groupInvoiceLines;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="refund_sequence", type="boolean", nullable=true, options={"comment"="Dedicated Credit Note Sequence"})
     */
    private $refundSequence;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="at_least_one_inbound", type="boolean", nullable=true, options={"comment"="At Least One Inbound"})
     */
    private $atLeastOneInbound;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="at_least_one_outbound", type="boolean", nullable=true, options={"comment"="At Least One Outbound"})
     */
    private $atLeastOneOutbound;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bank_statements_source", type="string", nullable=true, options={"comment"="Bank Feeds"})
     */
    private $bankStatementsSource;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_on_dashboard", type="boolean", nullable=true, options={"comment"="Show journal on dashboard"})
     */
    private $showOnDashboard;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

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
     * @var \ResPartnerBank
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerBank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_account_id", referencedColumnName="id")
     * })
     */
    private $bankAccount;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loss_account_id", referencedColumnName="id")
     * })
     */
    private $lossAccount;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profit_account_id", referencedColumnName="id")
     * })
     */
    private $profitAccount;

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
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \IrSequence
     *
     * @ORM\ManyToOne(targetEntity="IrSequence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refund_sequence_id", referencedColumnName="id")
     * })
     */
    private $refundSequence2;

    /**
     * @var \IrSequence
     *
     * @ORM\ManyToOne(targetEntity="IrSequence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sequence_id", referencedColumnName="id")
     * })
     */
    private $sequence2;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_debit_account_id", referencedColumnName="id")
     * })
     */
    private $defaultDebitAccount;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_credit_account_id", referencedColumnName="id")
     * })
     */
    private $defaultCreditAccount;


}
