<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccountTemplateTaxRel
 *
 * @ORM\Table(name="account_account_template_tax_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_account_template_tax_rel_account_id_tax_id_key", columns={"account_id", "tax_id"})}, indexes={@ORM\Index(name="account_account_template_tax_rel_account_id_idx", columns={"account_id"}), @ORM\Index(name="account_account_template_tax_rel_tax_id_idx", columns={"tax_id"})})
 * @ORM\Entity
 */
class AccountAccountTemplateTaxRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_account_template_tax_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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


}
