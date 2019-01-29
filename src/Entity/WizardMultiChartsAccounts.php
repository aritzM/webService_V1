<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WizardMultiChartsAccounts
 *
 * @ORM\Table(name="wizard_multi_charts_accounts", indexes={@ORM\Index(name="IDX_2B9CF6947C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2B9CF6944C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_2B9CF69441A66153", columns={"transfer_account_id"}), @ORM\Index(name="IDX_2B9CF69469C7268D", columns={"purchase_tax_id"}), @ORM\Index(name="IDX_2B9CF694C6C92A1A", columns={"sale_tax_id"}), @ORM\Index(name="IDX_2B9CF6949F96B27", columns={"chart_template_id"}), @ORM\Index(name="IDX_2B9CF69438248176", columns={"currency_id"}), @ORM\Index(name="IDX_2B9CF694979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class WizardMultiChartsAccounts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="wizard_multi_charts_accounts_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="only_one_chart_template", type="boolean", nullable=true, options={"comment"="Only One Chart Template Available"})
     */
    private $onlyOneChartTemplate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bank_account_code_prefix", type="string", nullable=true, options={"comment"="Bank Accounts Prefix"})
     */
    private $bankAccountCodePrefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cash_account_code_prefix", type="string", nullable=true, options={"comment"="Cash Accounts Prefix"})
     */
    private $cashAccountCodePrefix;

    /**
     * @var int
     *
     * @ORM\Column(name="code_digits", type="integer", nullable=false, options={"comment"="# of Digits"})
     */
    private $codeDigits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="sale_tax_rate", type="float", precision=10, scale=0, nullable=true, options={"comment"="Sales Tax(%)"})
     */
    private $saleTaxRate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="purchase_tax_rate", type="float", precision=10, scale=0, nullable=true, options={"comment"="Purchase Tax(%)"})
     */
    private $purchaseTaxRate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="complete_tax_set", type="boolean", nullable=true, options={"comment"="Complete Set of Taxes"})
     */
    private $completeTaxSet;

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
     *   @ORM\JoinColumn(name="transfer_account_id", referencedColumnName="id")
     * })
     */
    private $transferAccount;

    /**
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="purchase_tax_id", referencedColumnName="id")
     * })
     */
    private $purchaseTax;

    /**
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_tax_id", referencedColumnName="id")
     * })
     */
    private $saleTax;

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
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

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
