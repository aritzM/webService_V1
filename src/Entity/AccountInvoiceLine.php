<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvoiceLine
 *
 * @ORM\Table(name="account_invoice_line", indexes={@ORM\Index(name="account_invoice_line_invoice_id_index", columns={"invoice_id"}), @ORM\Index(name="account_invoice_line_uom_id_index", columns={"uom_id"}), @ORM\Index(name="account_invoice_line_product_id_index", columns={"product_id"}), @ORM\Index(name="IDX_4A09C0D57C455263", columns={"write_uid"}), @ORM\Index(name="IDX_4A09C0D54C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_4A09C0D538248176", columns={"currency_id"}), @ORM\Index(name="IDX_4A09C0D59393F8FE", columns={"partner_id"}), @ORM\Index(name="IDX_4A09C0D5979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_4A09C0D5E51A9B1B", columns={"account_analytic_id"}), @ORM\Index(name="IDX_4A09C0D59B6B5FBA", columns={"account_id"})})
 * @ORM\Entity
 */
class AccountInvoiceLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_invoice_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false, options={"comment"="Description"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origin", type="string", nullable=true, options={"comment"="Source Document"})
     */
    private $origin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="price_unit", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Unit Price"})
     */
    private $priceUnit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_subtotal", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount"})
     */
    private $priceSubtotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_total", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount"})
     */
    private $priceTotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_subtotal_signed", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount Signed"})
     */
    private $priceSubtotalSigned;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Quantity"})
     */
    private $quantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Discount (%)"})
     */
    private $discount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_rounding_line", type="boolean", nullable=true, options={"comment"="Rounding Line"})
     */
    private $isRoundingLine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Created on"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true, options={"comment"="Last Updated on"})
     */
    private $writeDate;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="write_uid", referencedColumnName="id")
     * })
     */
    private $writeUid;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_uid", referencedColumnName="id")
     * })
     */
    private $createUid;

    /**
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \AccountAnalyticAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAnalyticAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_analytic_id", referencedColumnName="id")
     * })
     */
    private $accountAnalytic;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

    /**
     * @var \ProductProduct
     *
     * @ORM\ManyToOne(targetEntity="ProductProduct")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \ProductUom
     *
     * @ORM\ManyToOne(targetEntity="ProductUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom_id", referencedColumnName="id")
     * })
     */
    private $uom;

    /**
     * @var \AccountInvoice
     *
     * @ORM\ManyToOne(targetEntity="AccountInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     * })
     */
    private $invoice;


}
