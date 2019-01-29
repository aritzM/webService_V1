<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountTaxTemplate
 *
 * @ORM\Table(name="account_tax_template", uniqueConstraints={@ORM\UniqueConstraint(name="account_tax_template_name_company_uniq", columns={"name", "company_id", "type_tax_use", "chart_template_id"})}, indexes={@ORM\Index(name="IDX_EE2CA87B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_EE2CA87B4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_EE2CA87BA68B744C", columns={"cash_basis_account"}), @ORM\Index(name="IDX_EE2CA87B1EC078F9", columns={"tax_group_id"}), @ORM\Index(name="IDX_EE2CA87B78912C16", columns={"refund_account_id"}), @ORM\Index(name="IDX_EE2CA87B9B6B5FBA", columns={"account_id"}), @ORM\Index(name="IDX_EE2CA87B979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_EE2CA87B9F96B27", columns={"chart_template_id"})})
 * @ORM\Entity
 */
class AccountTaxTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_tax_template_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Tax Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type_tax_use", type="string", nullable=false, options={"comment"="Tax Scope"})
     */
    private $typeTaxUse;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tax_adjustment", type="boolean", nullable=true, options={"comment"="Tax Adjustment"})
     */
    private $taxAdjustment;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_type", type="string", nullable=false, options={"comment"="Tax Computation"})
     */
    private $amountType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="sequence", type="integer", nullable=false, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Amount"})
     */
    private $amount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", nullable=true, options={"comment"="Display on Invoices"})
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="price_include", type="boolean", nullable=true, options={"comment"="Included in Price"})
     */
    private $priceInclude;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="include_base_amount", type="boolean", nullable=true, options={"comment"="Affect Subsequent Taxes"})
     */
    private $includeBaseAmount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="analytic", type="boolean", nullable=true, options={"comment"="Analytic Cost"})
     */
    private $analytic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_exigibility", type="string", nullable=true, options={"comment"="Tax Due"})
     */
    private $taxExigibility;

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
     *   @ORM\JoinColumn(name="cash_basis_account", referencedColumnName="id")
     * })
     */
    private $cashBasisAccount;

    /**
     * @var \AccountTaxGroup
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_group_id", referencedColumnName="id")
     * })
     */
    private $taxGroup;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refund_account_id", referencedColumnName="id")
     * })
     */
    private $refundAccount;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

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
     * @var \AccountChartTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountChartTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chart_template_id", referencedColumnName="id")
     * })
     */
    private $chartTemplate;


}
