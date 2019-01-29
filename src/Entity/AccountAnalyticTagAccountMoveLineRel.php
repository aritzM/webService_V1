<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAnalyticTagAccountMoveLineRel
 *
 * @ORM\Table(name="account_analytic_tag_account_move_line_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_analytic_tag_account__account_move_line_id_account__key", columns={"account_move_line_id", "account_analytic_tag_id"})}, indexes={@ORM\Index(name="account_analytic_tag_account_move_line_account_move_line_id_idx", columns={"account_move_line_id"}), @ORM\Index(name="account_analytic_tag_account_move_l_account_analytic_tag_id_idx", columns={"account_analytic_tag_id"})})
 * @ORM\Entity
 */
class AccountAnalyticTagAccountMoveLineRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_analytic_tag_account_move_line_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountAnalyticTag
     *
     * @ORM\ManyToOne(targetEntity="AccountAnalyticTag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_analytic_tag_id", referencedColumnName="id")
     * })
     */
    private $accountAnalyticTag;

    /**
     * @var \AccountMoveLine
     *
     * @ORM\ManyToOne(targetEntity="AccountMoveLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_move_line_id", referencedColumnName="id")
     * })
     */
    private $accountMoveLine;


}
