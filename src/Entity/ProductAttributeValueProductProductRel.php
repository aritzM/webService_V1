<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributeValueProductProductRel
 *
 * @ORM\Table(name="product_attribute_value_product_product_rel", uniqueConstraints={@ORM\UniqueConstraint(name="product_attribute_value_produ_product_product_id_product_at_key", columns={"product_product_id", "product_attribute_value_id"})}, indexes={@ORM\Index(name="product_attribute_value_product__product_attribute_value_id_idx", columns={"product_attribute_value_id"}), @ORM\Index(name="product_attribute_value_product_product__product_product_id_idx", columns={"product_product_id"})})
 * @ORM\Entity
 */
class ProductAttributeValueProductProductRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_attribute_value_product_product_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ProductAttributeValue
     *
     * @ORM\ManyToOne(targetEntity="ProductAttributeValue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_attribute_value_id", referencedColumnName="id")
     * })
     */
    private $productAttributeValue;

    /**
     * @var \ProductProduct
     *
     * @ORM\ManyToOne(targetEntity="ProductProduct")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_product_id", referencedColumnName="id")
     * })
     */
    private $productProduct;


}
