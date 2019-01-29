<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductUom
 *
 * @ORM\Table(name="product_uom", indexes={@ORM\Index(name="IDX_9C324D3B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_9C324D3B4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_9C324D3B12469DE2", columns={"category_id"})})
 * @ORM\Entity
 */
class ProductUom
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_uom_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Unit of Measure"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="factor", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Ratio"})
     */
    private $factor;

    /**
     * @var string
     *
     * @ORM\Column(name="rounding", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Rounding Precision"})
     */
    private $rounding;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="uom_type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $uomType;

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
     * @var \ProductUomCateg
     *
     * @ORM\ManyToOne(targetEntity="ProductUomCateg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;


}
