<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributePrice
 *
 * @ORM\Table(name="product_attribute_price", indexes={@ORM\Index(name="IDX_1B7BC4F27C455263", columns={"write_uid"}), @ORM\Index(name="IDX_1B7BC4F24C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_1B7BC4F2F920BBA2", columns={"value_id"}), @ORM\Index(name="IDX_1B7BC4F2F1DA9824", columns={"product_tmpl_id"})})
 * @ORM\Entity
 */
class ProductAttributePrice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_attribute_price_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_extra", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Price Extra"})
     */
    private $priceExtra;

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
     * @var \ProductAttributeValue
     *
     * @ORM\ManyToOne(targetEntity="ProductAttributeValue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="value_id", referencedColumnName="id")
     * })
     */
    private $value;

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
