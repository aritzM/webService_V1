<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountMoveLineAccountTaxRel
 *
 * @ORM\Table(name="account_move_line_account_tax_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_move_line_account_tax_account_move_line_id_account__key", columns={"account_move_line_id", "account_tax_id"})}, indexes={@ORM\Index(name="account_move_line_account_tax_rel_account_tax_id_idx", columns={"account_tax_id"}), @ORM\Index(name="account_move_line_account_tax_rel_account_move_line_id_idx", columns={"account_move_line_id"})})
 * @ORM\Entity
 */
class AccountMoveLineAccountTaxRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_move_line_account_tax_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountTax
     *
     * @ORM\ManyToOne(targetEntity="AccountTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_tax_id", referencedColumnName="id")
     * })
     */
    private $accountTax;

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
