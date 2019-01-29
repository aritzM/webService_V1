<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCompany
 *
 * @ORM\Table(name="res_company", uniqueConstraints={@ORM\UniqueConstraint(name="res_company_name_uniq", columns={"name"})}, indexes={@ORM\Index(name="res_company_parent_id_index", columns={"parent_id"}), @ORM\Index(name="IDX_6DFC5DA1B928F1F2", columns={"account_opening_move_id"}), @ORM\Index(name="IDX_6DFC5DA188335E53", columns={"property_stock_valuation_account_id"}), @ORM\Index(name="IDX_6DFC5DA1EDECF95F", columns={"property_stock_account_output_categ_id"}), @ORM\Index(name="IDX_6DFC5DA15191561A", columns={"property_stock_account_input_categ_id"}), @ORM\Index(name="IDX_6DFC5DA1EAC294C1", columns={"currency_exchange_journal_id"}), @ORM\Index(name="IDX_6DFC5DA112973388", columns={"tax_cash_basis_journal_id"}), @ORM\Index(name="IDX_6DFC5DA19F96B27", columns={"chart_template_id"}), @ORM\Index(name="IDX_6DFC5DA141A66153", columns={"transfer_account_id"}), @ORM\Index(name="IDX_6DFC5DA1EFB9C9A", columns={"resource_calendar_id"}), @ORM\Index(name="IDX_6DFC5DA17C455263", columns={"write_uid"}), @ORM\Index(name="IDX_6DFC5DA14C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_6DFC5DA12FE4C5D9", columns={"paperformat_id"}), @ORM\Index(name="IDX_6DFC5DA138248176", columns={"currency_id"}), @ORM\Index(name="IDX_6DFC5DA19393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class ResCompany
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_company_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_header", type="text", nullable=true, options={"comment"="Company Tagline"})
     */
    private $reportHeader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_footer", type="text", nullable=true, options={"comment"="Report Footer"})
     */
    private $reportFooter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo_web", type="blob", nullable=true, options={"comment"="Logo Web"})
     */
    private $logoWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_no", type="string", nullable=true, options={"comment"="Account No."})
     */
    private $accountNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", nullable=true, options={"comment"="Email"})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", nullable=true, options={"comment"="Phone"})
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_registry", type="string", nullable=true, options={"comment"="Company Registry"})
     */
    private $companyRegistry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_report_layout", type="string", nullable=true, options={"comment"="Document Template"})
     */
    private $externalReportLayout;

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
     * @var int
     *
     * @ORM\Column(name="fiscalyear_last_day", type="integer", nullable=false, options={"comment"="Fiscalyear Last Day"})
     */
    private $fiscalyearLastDay;

    /**
     * @var int
     *
     * @ORM\Column(name="fiscalyear_last_month", type="integer", nullable=false, options={"comment"="Fiscalyear Last Month"})
     */
    private $fiscalyearLastMonth;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="period_lock_date", type="date", nullable=true, options={"comment"="Lock Date for Non-Advisers"})
     */
    private $periodLockDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fiscalyear_lock_date", type="date", nullable=true, options={"comment"="Lock Date"})
     */
    private $fiscalyearLockDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="expects_chart_of_accounts", type="boolean", nullable=true, options={"comment"="Expects a Chart of Accounts"})
     */
    private $expectsChartOfAccounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bank_account_code_prefix", type="string", nullable=true, options={"comment"="Prefix of the bank accounts"})
     */
    private $bankAccountCodePrefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cash_account_code_prefix", type="string", nullable=true, options={"comment"="Prefix of the cash accounts"})
     */
    private $cashAccountCodePrefix;

    /**
     * @var int|null
     *
     * @ORM\Column(name="accounts_code_digits", type="integer", nullable=true, options={"comment"="Number of digits in an account code"})
     */
    private $accountsCodeDigits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_calculation_rounding_method", type="string", nullable=true, options={"comment"="Tax Calculation Rounding Method"})
     */
    private $taxCalculationRoundingMethod;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="anglo_saxon_accounting", type="boolean", nullable=true, options={"comment"="Use anglo-saxon accounting"})
     */
    private $angloSaxonAccounting;

    /**
     * @var string|null
     *
     * @ORM\Column(name="overdue_msg", type="text", nullable=true, options={"comment"="Overdue Payments Message"})
     */
    private $overdueMsg;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tax_exigibility", type="boolean", nullable=true, options={"comment"="Use Cash Basis"})
     */
    private $taxExigibility;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="account_setup_company_data_done", type="boolean", nullable=true, options={"comment"="Company Setup Marked As Done"})
     */
    private $accountSetupCompanyDataDone;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="account_setup_bank_data_done", type="boolean", nullable=true, options={"comment"="Bank Setup Marked As Done"})
     */
    private $accountSetupBankDataDone;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="account_setup_fy_data_done", type="boolean", nullable=true, options={"comment"="Financial Year Setup Marked As Done"})
     */
    private $accountSetupFyDataDone;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="account_setup_coa_done", type="boolean", nullable=true, options={"comment"="Chart of Account Checked"})
     */
    private $accountSetupCoaDone;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="account_setup_bar_closed", type="boolean", nullable=true, options={"comment"="Setup Bar Closed"})
     */
    private $accountSetupBarClosed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_twitter", type="string", nullable=true, options={"comment"="Twitter Account"})
     */
    private $socialTwitter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_facebook", type="string", nullable=true, options={"comment"="Facebook Account"})
     */
    private $socialFacebook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_github", type="string", nullable=true, options={"comment"="GitHub Account"})
     */
    private $socialGithub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_linkedin", type="string", nullable=true, options={"comment"="LinkedIn Account"})
     */
    private $socialLinkedin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_youtube", type="string", nullable=true, options={"comment"="Youtube Account"})
     */
    private $socialYoutube;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_googleplus", type="string", nullable=true, options={"comment"="Google+ Account"})
     */
    private $socialGoogleplus;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="vat_check_vies", type="boolean", nullable=true, options={"comment"="Verify VAT Numbers"})
     */
    private $vatCheckVies;

    /**
     * @var \AccountMove
     *
     * @ORM\ManyToOne(targetEntity="AccountMove")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_opening_move_id", referencedColumnName="id")
     * })
     */
    private $accountOpeningMove;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_stock_valuation_account_id", referencedColumnName="id")
     * })
     */
    private $propertyStockValuationAccount;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_stock_account_output_categ_id", referencedColumnName="id")
     * })
     */
    private $propertyStockAccountOutputCateg;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_stock_account_input_categ_id", referencedColumnName="id")
     * })
     */
    private $propertyStockAccountInputCateg;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_exchange_journal_id", referencedColumnName="id")
     * })
     */
    private $currencyExchangeJournal;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_cash_basis_journal_id", referencedColumnName="id")
     * })
     */
    private $taxCashBasisJournal;

    /**
     * @var \AccountChartTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountChartTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chart_template_id", referencedColumnName="id")
     * })
     */
    private $chartTemplate;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transfer_account_id", referencedColumnName="id")
     * })
     */
    private $transferAccount;

    /**
     * @var \ResourceCalendar
     *
     * @ORM\ManyToOne(targetEntity="ResourceCalendar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_calendar_id", referencedColumnName="id")
     * })
     */
    private $resourceCalendar;

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
     * @var \ReportPaperformat
     *
     * @ORM\ManyToOne(targetEntity="ReportPaperformat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paperformat_id", referencedColumnName="id")
     * })
     */
    private $paperformat;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}
