<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvoiceLineTax
 *
 * @ORM\Table(name="account_invoice_line_tax", uniqueConstraints={@ORM\UniqueConstraint(name="account_invoice_line_tax_invoice_line_id_tax_id_key", columns={"invoice_line_id", "tax_id"})}, indexes={@ORM\Index(name="account_invoice_line_tax_tax_id_idx", columns={"tax_id"}), @ORM\Index(name="account_invoice_line_tax_invoice_line_id_idx", columns={"invoice_line_id"})})
 * @ORM\Entity
 */
class AccountInvoiceLineTax
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_invoice_line_tax_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountTax
     *
     * @ORM\ManyToOne(targetEntity="AccountTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_id", referencedColumnName="id")
     * })
     */
    private $tax;

    /**
     * @var \AccountInvoiceLine
     *
     * @ORM\ManyToOne(targetEntity="AccountInvoiceLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoice_line_id", referencedColumnName="id")
     * })
     */
    private $invoiceLine;


}
