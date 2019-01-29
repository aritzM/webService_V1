<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountMoveLine
 *
 * @ORM\Table(name="account_move_line", indexes={@ORM\Index(name="account_move_line_statement_line_id_index", columns={"statement_line_id"}), @ORM\Index(name="account_move_line_date_maturity_index", columns={"date_maturity"}), @ORM\Index(name="account_move_line_statement_id_index", columns={"statement_id"}), @ORM\Index(name="account_move_line_partner_id_ref_idx", columns={"partner_id", "ref"}), @ORM\Index(name="account_move_line_date_index", columns={"date"}), @ORM\Index(name="account_move_line_move_id_index", columns={"move_id"}), @ORM\Index(name="account_move_line_journal_id_index", columns={"journal_id"}), @ORM\Index(name="account_move_line_account_id_index", columns={"account_id"}), @ORM\Index(name="account_move_line_user_type_id_index", columns={"user_type_id"}), @ORM\Index(name="account_move_line_ref_index", columns={"ref"}), @ORM\Index(name="IDX_FD0650197C455263", columns={"write_uid"}), @ORM\Index(name="IDX_FD0650194C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_FD0650199393F8FE", columns={"partner_id"}), @ORM\Index(name="IDX_FD0650192989F1FD", columns={"invoice_id"}), @ORM\Index(name="IDX_FD065019979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_FD06501934404A2D", columns={"analytic_account_id"}), @ORM\Index(name="IDX_FD065019C33D548", columns={"tax_line_id"}), @ORM\Index(name="IDX_FD065019FE1E80D8", columns={"full_reconcile_id"}), @ORM\Index(name="IDX_FD0650194C3A3BB", columns={"payment_id"}), @ORM\Index(name="IDX_FD06501938248176", columns={"currency_id"}), @ORM\Index(name="IDX_FD06501921F539EE", columns={"company_currency_id"}), @ORM\Index(name="IDX_FD0650194584665A", columns={"product_id"}), @ORM\Index(name="IDX_FD065019C37FAF15", columns={"product_uom_id"})})
 * @ORM\Entity
 */
class AccountMoveLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_move_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Label"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Quantity"})
     */
    private $quantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="debit", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Debit"})
     */
    private $debit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="credit", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Credit"})
     */
    private $credit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balance", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Balance"})
     */
    private $balance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="debit_cash_basis", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Debit Cash Basis"})
     */
    private $debitCashBasis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="credit_cash_basis", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Credit Cash Basis"})
     */
    private $creditCashBasis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balance_cash_basis", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Balance Cash Basis"})
     */
    private $balanceCashBasis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_currency", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount Currency"})
     */
    private $amountCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_residual", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Residual Amount"})
     */
    private $amountResidual;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_residual_currency", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Residual Amount in Currency"})
     */
    private $amountResidualCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_base_amount", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Base Amount"})
     */
    private $taxBaseAmount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", nullable=true, options={"comment"="Reference"})
     */
    private $ref;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reconciled", type="boolean", nullable=true, options={"comment"="Reconciled"})
     */
    private $reconciled;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="blocked", type="boolean", nullable=true, options={"comment"="No Follow-up"})
     */
    private $blocked;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_maturity", type="date", nullable=false, options={"comment"="Due date"})
     */
    private $dateMaturity;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tax_exigible", type="boolean", nullable=true, options={"comment"="Appears in VAT report"})
     */
    private $taxExigible;

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
     * @var \AccountAccountType
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_type_id", referencedColumnName="id")
     * })
     */
    private $userType;

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
     *   @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     * })
     */
    private $invoice;

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
     * @var \AccountAnalyticAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAnalyticAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="analytic_account_id", referencedColumnName="id")
     * })
     */
    private $analyticAccount;

    /**
     * @var \AccountTax
     *
     * @ORM\ManyToOne(targetEntity="AccountTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_line_id", referencedColumnName="id")
     * })
     */
    private $taxLine;

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
     * @var \AccountFullReconcile
     *
     * @ORM\ManyToOne(targetEntity="AccountFullReconcile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="full_reconcile_id", referencedColumnName="id")
     * })
     */
    private $fullReconcile;

    /**
     * @var \AccountBankStatement
     *
     * @ORM\ManyToOne(targetEntity="AccountBankStatement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statement_id", referencedColumnName="id")
     * })
     */
    private $statement;

    /**
     * @var \AccountBankStatementLine
     *
     * @ORM\ManyToOne(targetEntity="AccountBankStatementLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statement_line_id", referencedColumnName="id")
     * })
     */
    private $statementLine;

    /**
     * @var \AccountPayment
     *
     * @ORM\ManyToOne(targetEntity="AccountPayment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $payment;

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
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

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
     * @var \ProductProduct
     *
     * @ORM\ManyToOne(targetEntity="ProductProduct")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \ProductUom
     *
     * @ORM\ManyToOne(targetEntity="ProductUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_uom_id", referencedColumnName="id")
     * })
     */
    private $productUom;


}
