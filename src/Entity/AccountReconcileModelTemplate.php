<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountReconcileModelTemplate
 *
 * @ORM\Table(name="account_reconcile_model_template", indexes={@ORM\Index(name="IDX_B4F8F7A57C455263", columns={"write_uid"}), @ORM\Index(name="IDX_B4F8F7A54C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_B4F8F7A547960A46", columns={"second_tax_id"}), @ORM\Index(name="IDX_B4F8F7A57835BF29", columns={"second_account_id"}), @ORM\Index(name="IDX_B4F8F7A5B2A824D8", columns={"tax_id"}), @ORM\Index(name="IDX_B4F8F7A59B6B5FBA", columns={"account_id"}), @ORM\Index(name="IDX_B4F8F7A59F96B27", columns={"chart_template_id"})})
 * @ORM\Entity
 */
class AccountReconcileModelTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_reconcile_model_template_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Button Label"})
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="sequence", type="integer", nullable=false, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_second_line", type="boolean", nullable=true, options={"comment"="Add a second line"})
     */
    private $hasSecondLine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", nullable=true, options={"comment"="Journal Item Label"})
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_type", type="string", nullable=false, options={"comment"="Amount Type"})
     */
    private $amountType;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Amount"})
     */
    private $amount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="second_label", type="string", nullable=true, options={"comment"="Second Journal Item Label"})
     */
    private $secondLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="second_amount_type", type="string", nullable=false, options={"comment"="Second Amount type"})
     */
    private $secondAmountType;

    /**
     * @var string
     *
     * @ORM\Column(name="second_amount", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Second Amount"})
     */
    private $secondAmount;

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
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="second_tax_id", referencedColumnName="id")
     * })
     */
    private $secondTax;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="second_account_id", referencedColumnName="id")
     * })
     */
    private $secondAccount;

    /**
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_id", referencedColumnName="id")
     * })
     */
    private $tax;

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
     * @var \AccountChartTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountChartTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chart_template_id", referencedColumnName="id")
     * })
     */
    private $chartTemplate;


}
