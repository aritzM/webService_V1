<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductSupplierinfo
 *
 * @ORM\Table(name="product_supplierinfo", indexes={@ORM\Index(name="product_supplierinfo_product_tmpl_id_index", columns={"product_tmpl_id"}), @ORM\Index(name="product_supplierinfo_company_id_index", columns={"company_id"}), @ORM\Index(name="IDX_84B670337C455263", columns={"write_uid"}), @ORM\Index(name="IDX_84B670334C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_84B670334584665A", columns={"product_id"}), @ORM\Index(name="IDX_84B6703338248176", columns={"currency_id"}), @ORM\Index(name="IDX_84B670335E237E06", columns={"name"})})
 * @ORM\Entity
 */
class ProductSupplierinfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_supplierinfo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_name", type="string", nullable=true, options={"comment"="Vendor Product Name"})
     */
    private $productName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_code", type="string", nullable=true, options={"comment"="Vendor Product Code"})
     */
    private $productCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var float
     *
     * @ORM\Column(name="min_qty", type="float", precision=10, scale=0, nullable=false, options={"comment"="Minimal Quantity"})
     */
    private $minQty;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Price"})
     */
    private $price;

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
     * @var int
     *
     * @ORM\Column(name="delay", type="integer", nullable=false, options={"comment"="Delivery Lead Time"})
     */
    private $delay;

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
     * @var \ProductTemplate
     *
     * @ORM\ManyToOne(targetEntity="ProductTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_tmpl_id", referencedColumnName="id")
     * })
     */
    private $productTmpl;

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
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="id")
     * })
     */
    private $name;


}
