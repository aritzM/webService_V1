<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPricelistItem
 *
 * @ORM\Table(name="product_pricelist_item", indexes={@ORM\Index(name="product_pricelist_item_pricelist_id_index", columns={"pricelist_id"}), @ORM\Index(name="product_pricelist_item_compute_price_index", columns={"compute_price"}), @ORM\Index(name="IDX_45CAFAAC7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_45CAFAAC4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_45CAFAAC38248176", columns={"currency_id"}), @ORM\Index(name="IDX_45CAFAAC979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_45CAFAAC3A6B0680", columns={"base_pricelist_id"}), @ORM\Index(name="IDX_45CAFAACE8175B12", columns={"categ_id"}), @ORM\Index(name="IDX_45CAFAAC4584665A", columns={"product_id"}), @ORM\Index(name="IDX_45CAFAACF1DA9824", columns={"product_tmpl_id"})})
 * @ORM\Entity
 */
class ProductPricelistItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_pricelist_item_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_quantity", type="integer", nullable=true, options={"comment"="Min. Quantity"})
     */
    private $minQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="applied_on", type="string", nullable=false, options={"comment"="Apply On"})
     */
    private $appliedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="base", type="string", nullable=false, options={"comment"="Based on"})
     */
    private $base;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_surcharge", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Price Surcharge"})
     */
    private $priceSurcharge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_discount", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Price Discount"})
     */
    private $priceDiscount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_round", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Price Rounding"})
     */
    private $priceRound;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_min_margin", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Min. Price Margin"})
     */
    private $priceMinMargin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_max_margin", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Max. Price Margin"})
     */
    private $priceMaxMargin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="date", nullable=true, options={"comment"="Start Date"})
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="date", nullable=true, options={"comment"="End Date"})
     */
    private $dateEnd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compute_price", type="string", nullable=true, options={"comment"="Compute Price"})
     */
    private $computePrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fixed_price", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Fixed Price"})
     */
    private $fixedPrice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="percent_price", type="float", precision=10, scale=0, nullable=true, options={"comment"="Percentage Price"})
     */
    private $percentPrice;

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

    /**
     * @var \ProductPricelist
     *
     * @ORM\ManyToOne(targetEntity="ProductPricelist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pricelist_id", referencedColumnName="id")
     * })
     */
    private $pricelist;

    /**
     * @var \ProductPricelist
     *
     * @ORM\ManyToOne(targetEntity="ProductPricelist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_pricelist_id", referencedColumnName="id")
     * })
     */
    private $basePricelist;

    /**
     * @var \ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categ_id", referencedColumnName="id")
     * })
     */
    private $categ;

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
     * @var \ProductTemplate
     *
     * @ORM\ManyToOne(targetEntity="ProductTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_tmpl_id", referencedColumnName="id")
     * })
     */
    private $productTmpl;


}
