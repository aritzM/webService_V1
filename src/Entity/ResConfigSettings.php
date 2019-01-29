<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResConfigSettings
 *
 * @ORM\Table(name="res_config_settings", indexes={@ORM\Index(name="IDX_2B80B04A18F45C82", columns={"website_id"}), @ORM\Index(name="IDX_2B80B04A9F96B27", columns={"chart_template_id"}), @ORM\Index(name="IDX_2B80B04A7871026A", columns={"auth_signup_template_user_id"}), @ORM\Index(name="IDX_2B80B04A979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_2B80B04A7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2B80B04A4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ResConfigSettings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_config_settings_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var bool|null
     *
     * @ORM\Column(name="group_multi_company", type="boolean", nullable=true, options={"comment"="Manage multiple companies"})
     */
    private $groupMultiCompany;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_user_rights", type="boolean", nullable=true, options={"comment"="Default Access Rights"})
     */
    private $defaultUserRights;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_external_email_server", type="boolean", nullable=true, options={"comment"="External Email Servers"})
     */
    private $defaultExternalEmailServer;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_base_import", type="boolean", nullable=true, options={"comment"="Allow users to import data from CSV/XLS/XLSX/ODS files"})
     */
    private $moduleBaseImport;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_google_calendar", type="boolean", nullable=true, options={"comment"="Allow the users to synchronize their calendar  with Google Calendar"})
     */
    private $moduleGoogleCalendar;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_google_drive", type="boolean", nullable=true, options={"comment"="Attach Google documents to any record"})
     */
    private $moduleGoogleDrive;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_google_spreadsheet", type="boolean", nullable=true, options={"comment"="Google Spreadsheet"})
     */
    private $moduleGoogleSpreadsheet;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_auth_oauth", type="boolean", nullable=true, options={"comment"="Use external authentication providers (OAuth)"})
     */
    private $moduleAuthOauth;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_auth_ldap", type="boolean", nullable=true, options={"comment"="LDAP Authentication"})
     */
    private $moduleAuthLdap;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_base_gengo", type="boolean", nullable=true, options={"comment"="Translate Your Website with Gengo"})
     */
    private $moduleBaseGengo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_inter_company_rules", type="boolean", nullable=true, options={"comment"="Manage Inter Company"})
     */
    private $moduleInterCompanyRules;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_pad", type="boolean", nullable=true, options={"comment"="Collaborative Pads"})
     */
    private $modulePad;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_voip", type="boolean", nullable=true, options={"comment"="Asterisk (VoIP)"})
     */
    private $moduleVoip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_share_partner", type="boolean", nullable=true, options={"comment"="Share partners to all companies"})
     */
    private $companySharePartner;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_custom_report_footer", type="boolean", nullable=true, options={"comment"="Custom Report Footer"})
     */
    private $defaultCustomReportFooter;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_multi_currency", type="boolean", nullable=true, options={"comment"="Multi-Currencies"})
     */
    private $groupMultiCurrency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fail_counter", type="integer", nullable=true, options={"comment"="Fail Mail"})
     */
    private $failCounter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alias_domain", type="string", nullable=true, options={"comment"="Alias Domain"})
     */
    private $aliasDomain;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auth_signup_reset_password", type="boolean", nullable=true, options={"comment"="Enable password reset from Login page"})
     */
    private $authSignupResetPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auth_signup_uninvited", type="string", nullable=true, options={"comment"="Customer Account"})
     */
    private $authSignupUninvited;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crm_alias_prefix", type="string", nullable=true, options={"comment"="Default Alias Name for Leads"})
     */
    private $crmAliasPrefix;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="generate_lead_from_alias", type="boolean", nullable=true, options={"comment"="Manual Assignation of Emails"})
     */
    private $generateLeadFromAlias;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_use_lead", type="boolean", nullable=true, options={"comment"="Leads"})
     */
    private $groupUseLead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_crm_phone_validation", type="boolean", nullable=true, options={"comment"="Phone Formatting"})
     */
    private $moduleCrmPhoneValidation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_web_clearbit", type="boolean", nullable=true, options={"comment"="Customer Autocomplete"})
     */
    private $moduleWebClearbit;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_hr_org_chart", type="boolean", nullable=true, options={"comment"="Show Organizational Chart"})
     */
    private $moduleHrOrgChart;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_share_product", type="boolean", nullable=true, options={"comment"="Share product to all companies"})
     */
    private $companyShareProduct;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_uom", type="boolean", nullable=true, options={"comment"="Units of Measure"})
     */
    private $groupUom;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_product_variant", type="boolean", nullable=true, options={"comment"="Attributes and Variants"})
     */
    private $groupProductVariant;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_stock_packaging", type="boolean", nullable=true, options={"comment"="Product Packages"})
     */
    private $groupStockPackaging;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_sale_pricelist", type="boolean", nullable=true, options={"comment"="Use pricelists to adapt your price per customers"})
     */
    private $groupSalePricelist;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_product_pricelist", type="boolean", nullable=true, options={"comment"="Show pricelists On Products"})
     */
    private $groupProductPricelist;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_pricelist_item", type="boolean", nullable=true, options={"comment"="Show pricelists to customers"})
     */
    private $groupPricelistItem;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_accountant", type="boolean", nullable=true, options={"comment"="Accounting"})
     */
    private $moduleAccountAccountant;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_analytic_accounting", type="boolean", nullable=true, options={"comment"="Analytic Accounting"})
     */
    private $groupAnalyticAccounting;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_warning_account", type="boolean", nullable=true, options={"comment"="Warnings"})
     */
    private $groupWarningAccount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_cash_rounding", type="boolean", nullable=true, options={"comment"="Cash Rounding"})
     */
    private $groupCashRounding;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_asset", type="boolean", nullable=true, options={"comment"="Assets Management"})
     */
    private $moduleAccountAsset;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_deferred_revenue", type="boolean", nullable=true, options={"comment"="Revenue Recognition"})
     */
    private $moduleAccountDeferredRevenue;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_budget", type="boolean", nullable=true, options={"comment"="Budget Management"})
     */
    private $moduleAccountBudget;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_payment", type="boolean", nullable=true, options={"comment"="Online Payment"})
     */
    private $moduleAccountPayment;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_reports", type="boolean", nullable=true, options={"comment"="Dynamic Reports"})
     */
    private $moduleAccountReports;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_reports_followup", type="boolean", nullable=true, options={"comment"="Follow-up Levels"})
     */
    private $moduleAccountReportsFollowup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_l10n_us_check_printing", type="boolean", nullable=true, options={"comment"="Allow check printing and deposits"})
     */
    private $moduleL10nUsCheckPrinting;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_batch_deposit", type="boolean", nullable=true, options={"comment"="Use batch deposit"})
     */
    private $moduleAccountBatchDeposit;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_sepa", type="boolean", nullable=true, options={"comment"="SEPA Credit Transfer (SCT)"})
     */
    private $moduleAccountSepa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_sepa_direct_debit", type="boolean", nullable=true, options={"comment"="Use SEPA Direct Debit"})
     */
    private $moduleAccountSepaDirectDebit;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_plaid", type="boolean", nullable=true, options={"comment"="Plaid Connector"})
     */
    private $moduleAccountPlaid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_yodlee", type="boolean", nullable=true, options={"comment"="Bank Interface - Sync your bank feeds automatically"})
     */
    private $moduleAccountYodlee;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_bank_statement_import_qif", type="boolean", nullable=true, options={"comment"="Import .qif files"})
     */
    private $moduleAccountBankStatementImportQif;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_bank_statement_import_ofx", type="boolean", nullable=true, options={"comment"="Import in .ofx format"})
     */
    private $moduleAccountBankStatementImportOfx;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_bank_statement_import_csv", type="boolean", nullable=true, options={"comment"="Import in .csv format"})
     */
    private $moduleAccountBankStatementImportCsv;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_bank_statement_import_camt", type="boolean", nullable=true, options={"comment"="Import in CAMT.053 format"})
     */
    private $moduleAccountBankStatementImportCamt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_currency_rate_live", type="boolean", nullable=true, options={"comment"="Automatic Currency Rates"})
     */
    private $moduleCurrencyRateLive;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_print_docsaway", type="boolean", nullable=true, options={"comment"="Docsaway"})
     */
    private $modulePrintDocsaway;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_product_margin", type="boolean", nullable=true, options={"comment"="Allow Product Margin"})
     */
    private $moduleProductMargin;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_l10n_eu_service", type="boolean", nullable=true, options={"comment"="EU Digital Goods VAT"})
     */
    private $moduleL10nEuService;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_account_taxcloud", type="boolean", nullable=true, options={"comment"="Account TaxCloud"})
     */
    private $moduleAccountTaxcloud;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_website_version", type="boolean", nullable=true, options={"comment"="A/B Testing"})
     */
    private $moduleWebsiteVersion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_maps_api_key", type="string", nullable=true, options={"comment"="Google Maps API Key"})
     */
    private $googleMapsApiKey;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_google_analytics", type="boolean", nullable=true, options={"comment"="Google Analytics"})
     */
    private $hasGoogleAnalytics;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_google_analytics_dashboard", type="boolean", nullable=true, options={"comment"="Google Analytics in Dashboard"})
     */
    private $hasGoogleAnalyticsDashboard;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_google_maps", type="boolean", nullable=true, options={"comment"="Google Maps"})
     */
    private $hasGoogleMaps;

    /**
     * @var \Website
     *
     * @ORM\ManyToOne(targetEntity="Website")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="website_id", referencedColumnName="id")
     * })
     */
    private $website;

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
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auth_signup_template_user_id", referencedColumnName="id")
     * })
     */
    private $authSignupTemplateUser;

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


}
