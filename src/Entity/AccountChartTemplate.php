<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountChartTemplate
 *
 * @ORM\Table(name="account_chart_template", indexes={@ORM\Index(name="IDX_92B2BEF67C455263", columns={"write_uid"}), @ORM\Index(name="IDX_92B2BEF64C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_92B2BEF688335E53", columns={"property_stock_valuation_account_id"}), @ORM\Index(name="IDX_92B2BEF6EDECF95F", columns={"property_stock_account_output_categ_id"}), @ORM\Index(name="IDX_92B2BEF65191561A", columns={"property_stock_account_input_categ_id"}), @ORM\Index(name="IDX_92B2BEF6BFB8B8EC", columns={"property_account_income_id"}), @ORM\Index(name="IDX_92B2BEF6C19601F2", columns={"property_account_expense_id"}), @ORM\Index(name="IDX_92B2BEF6DB5FB1CA", columns={"property_account_income_categ_id"}), @ORM\Index(name="IDX_92B2BEF6E1D62513", columns={"property_account_expense_categ_id"}), @ORM\Index(name="IDX_92B2BEF67E004064", columns={"property_account_payable_id"}), @ORM\Index(name="IDX_92B2BEF6ACD730FD", columns={"property_account_receivable_id"}), @ORM\Index(name="IDX_92B2BEF68162E0B5", columns={"expense_currency_exchange_account_id"}), @ORM\Index(name="IDX_92B2BEF61C4033C5", columns={"income_currency_exchange_account_id"}), @ORM\Index(name="IDX_92B2BEF641A66153", columns={"transfer_account_id"}), @ORM\Index(name="IDX_92B2BEF638248176", columns={"currency_id"}), @ORM\Index(name="IDX_92B2BEF6727ACA70", columns={"parent_id"}), @ORM\Index(name="IDX_92B2BEF6979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class AccountChartTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_chart_template_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="code_digits", type="integer", nullable=false, options={"comment"="# of Digits"})
     */
    private $codeDigits;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true, options={"comment"="Can be Visible?"})
     */
    private $visible;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_anglo_saxon", type="boolean", nullable=true, options={"comment"="Use Anglo-Saxon accounting"})
     */
    private $useAngloSaxon;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="complete_tax_set", type="boolean", nullable=true, options={"comment"="Complete Set of Taxes"})
     */
    private $completeTaxSet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bank_account_code_prefix", type="string", nullable=true, options={"comment"="Prefix of the bank accounts"})
     */
    private $bankAccountCodePrefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cash_account_code_prefix", type="string", nullable=true, options={"comment"="Prefix of the main cash accounts"})
     */
    private $cashAccountCodePrefix;

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
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_stock_valuation_account_id", referencedColumnName="id")
     * })
     */
    private $propertyStockValuationAccount;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_stock_account_output_categ_id", referencedColumnName="id")
     * })
     */
    private $propertyStockAccountOutputCateg;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_stock_account_input_categ_id", referencedColumnName="id")
     * })
     */
    private $propertyStockAccountInputCateg;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_account_income_id", referencedColumnName="id")
     * })
     */
    private $propertyAccountIncome;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_account_expense_id", referencedColumnName="id")
     * })
     */
    private $propertyAccountExpense;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_account_income_categ_id", referencedColumnName="id")
     * })
     */
    private $propertyAccountIncomeCateg;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_account_expense_categ_id", referencedColumnName="id")
     * })
     */
    private $propertyAccountExpenseCateg;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_account_payable_id", referencedColumnName="id")
     * })
     */
    private $propertyAccountPayable;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_account_receivable_id", referencedColumnName="id")
     * })
     */
    private $propertyAccountReceivable;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expense_currency_exchange_account_id", referencedColumnName="id")
     * })
     */
    private $expenseCurrencyExchangeAccount;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="income_currency_exchange_account_id", referencedColumnName="id")
     * })
     */
    private $incomeCurrencyExchangeAccount;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transfer_account_id", referencedColumnName="id")
     * })
     */
    private $transferAccount;

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
     * @var \AccountChartTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountChartTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

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
