<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountTaxAccountTag
 *
 * @ORM\Table(name="account_tax_account_tag", uniqueConstraints={@ORM\UniqueConstraint(name="account_tax_account_tag_account_tax_id_account_account_tag__key", columns={"account_tax_id", "account_account_tag_id"})}, indexes={@ORM\Index(name="account_tax_account_tag_account_account_tag_id_idx", columns={"account_account_tag_id"}), @ORM\Index(name="account_tax_account_tag_account_tax_id_idx", columns={"account_tax_id"})})
 * @ORM\Entity
 */
class AccountTaxAccountTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_tax_account_tag_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountTax
     *
     * @ORM\ManyToOne(targetEntity="AccountTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_tax_id", referencedColumnName="id")
     * })
     */
    private $accountTax;


}
