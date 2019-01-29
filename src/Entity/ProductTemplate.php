<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductTemplate
 *
 * @ORM\Table(name="product_template", indexes={@ORM\Index(name="product_template_name_index", columns={"name"}), @ORM\Index(name="product_template_company_id_index", columns={"company_id"}), @ORM\Index(name="IDX_5CD075147C455263", columns={"write_uid"}), @ORM\Index(name="IDX_5CD075144C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_5CD0751441D8AC9C", columns={"uom_po_id"}), @ORM\Index(name="IDX_5CD07514A103EEB1", columns={"uom_id"}), @ORM\Index(name="IDX_5CD07514E8175B12", columns={"categ_id"})})
 * @ORM\Entity
 */
class ProductTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_template_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
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
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Description"})
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_purchase", type="text", nullable=true, options={"comment"="Purchase Description"})
     */
    private $descriptionPurchase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_sale", type="text", nullable=true, options={"comment"="Sale Description"})
     */
    private $descriptionSale;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Product Type"})
     */
    private $type;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rental", type="boolean", nullable=true, options={"comment"="Can be Rent"})
     */
    private $rental;

    /**
     * @var string|null
     *
     * @ORM\Column(name="list_price", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Sales Price"})
     */
    private $listPrice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true, options={"comment"="Volume"})
     */
    private $volume;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Weight"})
     */
    private $weight;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sale_ok", type="boolean", nullable=true, options={"comment"="Can be Sold"})
     */
    private $saleOk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="purchase_ok", type="boolean", nullable=true, options={"comment"="Can be Purchased"})
     */
    private $purchaseOk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_code", type="string", nullable=true, options={"comment"="Internal Reference"})
     */
    private $defaultCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activity_date_deadline", type="date", nullable=true, options={"comment"="Next Activity Deadline"})
     */
    private $activityDateDeadline;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \ProductUom
     *
     * @ORM\ManyToOne(targetEntity="ProductUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom_po_id", referencedColumnName="id")
     * })
     */
    private $uomPo;

    /**
     * @var \ProductUom
     *
     * @ORM\ManyToOne(targetEntity="ProductUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom_id", referencedColumnName="id")
     * })
     */
    private $uom;

    /**
     * @var \ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categ_id", referencedColumnName="id")
     * })
     */
    private $categ;


}
