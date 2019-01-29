<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAnalyticAccountTagRel
 *
 * @ORM\Table(name="account_analytic_account_tag_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_analytic_account_tag_rel_account_id_tag_id_key", columns={"account_id", "tag_id"})}, indexes={@ORM\Index(name="account_analytic_account_tag_rel_account_id_idx", columns={"account_id"}), @ORM\Index(name="account_analytic_account_tag_rel_tag_id_idx", columns={"tag_id"})})
 * @ORM\Entity
 */
class AccountAnalyticAccountTagRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_analytic_account_tag_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountAnalyticTag
     *
     * @ORM\ManyToOne(targetEntity="AccountAnalyticTag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     * })
     */
    private $tag;

    /**
     * @var \AccountAnalyticAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAnalyticAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;


}
