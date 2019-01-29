<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccountTagAccountTaxTemplateRel
 *
 * @ORM\Table(name="account_account_tag_account_tax_template_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_account_tag_account_t_account_tax_template_id_accou_key", columns={"account_tax_template_id", "account_account_tag_id"})}, indexes={@ORM\Index(name="account_account_tag_account_tax_tem_account_tax_template_id_idx", columns={"account_tax_template_id"}), @ORM\Index(name="account_account_tag_account_tax_temp_account_account_tag_id_idx", columns={"account_account_tag_id"})})
 * @ORM\Entity
 */
class AccountAccountTagAccountTaxTemplateRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_account_tag_account_tax_template_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountAccountTag
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_account_tag_id", referencedColumnName="id")
     * })
     */
    private $accountAccountTag;

    /**
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_tax_template_id", referencedColumnName="id")
     * })
     */
    private $accountTaxTemplate;


}
