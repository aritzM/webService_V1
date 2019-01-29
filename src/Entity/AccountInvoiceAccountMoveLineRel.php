<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvoiceAccountMoveLineRel
 *
 * @ORM\Table(name="account_invoice_account_move_line_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_invoice_account_move__account_invoice_id_account_mo_key", columns={"account_invoice_id", "account_move_line_id"})}, indexes={@ORM\Index(name="account_invoice_account_move_line_rel_account_move_line_id_idx", columns={"account_move_line_id"}), @ORM\Index(name="account_invoice_account_move_line_rel_account_invoice_id_idx", columns={"account_invoice_id"})})
 * @ORM\Entity
 */
class AccountInvoiceAccountMoveLineRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_invoice_account_move_line_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountMoveLine
     *
     * @ORM\ManyToOne(targetEntity="AccountMoveLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_move_line_id", referencedColumnName="id")
     * })
     */
    private $accountMoveLine;

    /**
     * @var \AccountInvoice
     *
     * @ORM\ManyToOne(targetEntity="AccountInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_invoice_id", referencedColumnName="id")
     * })
     */
    private $accountInvoice;


}
