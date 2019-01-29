<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAnalyticLine
 *
 * @ORM\Table(name="account_analytic_line", indexes={@ORM\Index(name="account_analytic_line_account_id_index", columns={"account_id"}), @ORM\Index(name="account_analytic_line_move_id_index", columns={"move_id"}), @ORM\Index(name="account_analytic_line_date_index", columns={"date"}), @ORM\Index(name="IDX_7692C62C38248176", columns={"currency_id"}), @ORM\Index(name="IDX_7692C62CE8547D2B", columns={"general_account_id"}), @ORM\Index(name="IDX_7692C62C4584665A", columns={"product_id"}), @ORM\Index(name="IDX_7692C62CC37FAF15", columns={"product_uom_id"}), @ORM\Index(name="IDX_7692C62C7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7692C62C4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_7692C62C979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_7692C62CA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_7692C62C9393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class AccountAnalyticLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_analytic_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Description"})
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Amount"})
     */
    private $amount;

    /**
     * @var float|null
     *
     * @ORM\Column(name="unit_amount", type="float", precision=10, scale=0, nullable=true, options={"comment"="Quantity"})
     */
    private $unitAmount;

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
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=8, nullable=true, options={"comment"="Code"})
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", nullable=true, options={"comment"="Ref."})
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_currency", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount Currency"})
     */
    private $amountCurrency;

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
     * @var \AccountMoveLine
     *
     * @ORM\ManyToOne(targetEntity="AccountMoveLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_id", referencedColumnName="id")
     * })
     */
    private $move;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="general_account_id", referencedColumnName="id")
     * })
     */
    private $generalAccount;

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
     *   @ORM\JoinColumn(name="product_uom_id", referencedColumnName="id")
     * })
     */
    private $productUom;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

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
     * @var \AccountAnalyticAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAnalyticAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;


}
