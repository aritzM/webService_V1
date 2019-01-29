<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductTaxesRel
 *
 * @ORM\Table(name="product_taxes_rel", uniqueConstraints={@ORM\UniqueConstraint(name="product_taxes_rel_prod_id_tax_id_key", columns={"prod_id", "tax_id"})}, indexes={@ORM\Index(name="product_taxes_rel_tax_id_idx", columns={"tax_id"}), @ORM\Index(name="product_taxes_rel_prod_id_idx", columns={"prod_id"})})
 * @ORM\Entity
 */
class ProductTaxesRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_taxes_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountTax
     *
     * @ORM\ManyToOne(targetEntity="AccountTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_id", referencedColumnName="id")
     * })
     */
    private $tax;

    /**
     * @var \ProductTemplate
     *
     * @ORM\ManyToOne(targetEntity="ProductTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prod_id", referencedColumnName="id")
     * })
     */
    private $prod;


}
