<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvoicePaymentRel
 *
 * @ORM\Table(name="account_invoice_payment_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_invoice_payment_rel_payment_id_invoice_id_key", columns={"payment_id", "invoice_id"})}, indexes={@ORM\Index(name="account_invoice_payment_rel_invoice_id_idx", columns={"invoice_id"}), @ORM\Index(name="account_invoice_payment_rel_payment_id_idx", columns={"payment_id"})})
 * @ORM\Entity
 */
class AccountInvoicePaymentRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_invoice_payment_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountInvoice
     *
     * @ORM\ManyToOne(targetEntity="AccountInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     * })
     */
    private $invoice;

    /**
     * @var \AccountPayment
     *
     * @ORM\ManyToOne(targetEntity="AccountPayment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $payment;


}
