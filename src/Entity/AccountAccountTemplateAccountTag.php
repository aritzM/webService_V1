<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccountTemplateAccountTag
 *
 * @ORM\Table(name="account_account_template_account_tag", uniqueConstraints={@ORM\UniqueConstraint(name="account_account_template_acco_account_account_template_id_a_key", columns={"account_account_template_id", "account_account_tag_id"})}, indexes={@ORM\Index(name="account_account_template_accoun_account_account_template_id_idx", columns={"account_account_template_id"}), @ORM\Index(name="account_account_template_account_tag_account_account_tag_id_idx", columns={"account_account_tag_id"})})
 * @ORM\Entity
 */
class AccountAccountTemplateAccountTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_account_template_account_tag_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_account_template_id", referencedColumnName="id")
     * })
     */
    private $accountAccountTemplate;


}
