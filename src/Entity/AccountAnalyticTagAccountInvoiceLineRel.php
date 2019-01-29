<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAnalyticTagAccountInvoiceLineRel
 *
 * @ORM\Table(name="account_analytic_tag_account_invoice_line_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_analytic_tag_account__account_invoice_line_id_accou_key", columns={"account_invoice_line_id", "account_analytic_tag_id"})}, indexes={@ORM\Index(name="account_analytic_tag_account_invoic_account_analytic_tag_id_idx", columns={"account_analytic_tag_id"}), @ORM\Index(name="account_analytic_tag_account_invoic_account_invoice_line_id_idx", columns={"account_invoice_line_id"})})
 * @ORM\Entity
 */
class AccountAnalyticTagAccountInvoiceLineRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_analytic_tag_account_invoice_line_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountInvoiceLine
     *
     * @ORM\ManyToOne(targetEntity="AccountInvoiceLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_invoice_line_id", referencedColumnName="id")
     * })
     */
    private $accountInvoiceLine;


}
