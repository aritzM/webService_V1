<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributeLineProductAttributeValueRel
 *
 * @ORM\Table(name="product_attribute_line_product_attribute_value_rel", uniqueConstraints={@ORM\UniqueConstraint(name="product_attribute_line_produc_product_attribute_line_id_pro_key", columns={"product_attribute_line_id", "product_attribute_value_id"})}, indexes={@ORM\Index(name="product_attribute_line_product_a_product_attribute_value_id_idx", columns={"product_attribute_value_id"}), @ORM\Index(name="product_attribute_line_product_at_product_attribute_line_id_idx", columns={"product_attribute_line_id"})})
 * @ORM\Entity
 */
class ProductAttributeLineProductAttributeValueRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_attribute_line_product_attribute_value_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \ProductAttributeLine
     *
     * @ORM\ManyToOne(targetEntity="ProductAttributeLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_attribute_line_id", referencedColumnName="id")
     * })
     */
    private $productAttributeLine;


}
