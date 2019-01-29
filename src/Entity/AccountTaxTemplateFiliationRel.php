<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountTaxTemplateFiliationRel
 *
 * @ORM\Table(name="account_tax_template_filiation_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_tax_template_filiation_rel_parent_tax_child_tax_key", columns={"parent_tax", "child_tax"})}, indexes={@ORM\Index(name="account_tax_template_filiation_rel_parent_tax_idx", columns={"parent_tax"}), @ORM\Index(name="account_tax_template_filiation_rel_child_tax_idx", columns={"child_tax"})})
 * @ORM\Entity
 */
class AccountTaxTemplateFiliationRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_tax_template_filiation_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="child_tax", referencedColumnName="id")
     * })
     */
    private $childTax;

    /**
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_tax", referencedColumnName="id")
     * })
     */
    private $parentTax;


}
