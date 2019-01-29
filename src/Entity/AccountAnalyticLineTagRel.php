<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAnalyticLineTagRel
 *
 * @ORM\Table(name="account_analytic_line_tag_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_analytic_line_tag_rel_line_id_tag_id_key", columns={"line_id", "tag_id"})}, indexes={@ORM\Index(name="account_analytic_line_tag_rel_tag_id_idx", columns={"tag_id"}), @ORM\Index(name="account_analytic_line_tag_rel_line_id_idx", columns={"line_id"})})
 * @ORM\Entity
 */
class AccountAnalyticLineTagRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_analytic_line_tag_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountAnalyticLine
     *
     * @ORM\ManyToOne(targetEntity="AccountAnalyticLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="line_id", referencedColumnName="id")
     * })
     */
    private $line;


}
