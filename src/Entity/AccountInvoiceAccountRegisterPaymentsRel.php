<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvoiceAccountRegisterPaymentsRel
 *
 * @ORM\Table(name="account_invoice_account_register_payments_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_invoice_account_regis_account_register_payments_id__key", columns={"account_register_payments_id", "account_invoice_id"})}, indexes={@ORM\Index(name="account_invoice_account_register_payment_account_invoice_id_idx", columns={"account_invoice_id"}), @ORM\Index(name="account_invoice_account_regist_account_register_payments_id_idx", columns={"account_register_payments_id"})})
 * @ORM\Entity
 */
class AccountInvoiceAccountRegisterPaymentsRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_invoice_account_register_payments_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountInvoice
     *
     * @ORM\ManyToOne(targetEntity="AccountInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_invoice_id", referencedColumnName="id")
     * })
     */
    private $accountInvoice;

    /**
     * @var \AccountRegisterPayments
     *
     * @ORM\ManyToOne(targetEntity="AccountRegisterPayments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_register_payments_id", referencedColumnName="id")
     * })
     */
    private $accountRegisterPayments;


}
