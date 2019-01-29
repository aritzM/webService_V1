<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountPartialReconcile
 *
 * @ORM\Table(name="account_partial_reconcile", indexes={@ORM\Index(name="account_partial_reconcile_credit_move_id_index", columns={"credit_move_id"}), @ORM\Index(name="account_partial_reconcile_debit_move_id_index", columns={"debit_move_id"}), @ORM\Index(name="IDX_7756D3487C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7756D3484C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_7756D348FE1E80D8", columns={"full_reconcile_id"}), @ORM\Index(name="IDX_7756D348979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_7756D34838248176", columns={"currency_id"})})
 * @ORM\Entity
 */
class AccountPartialReconcile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_partial_reconcile_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount"})
     */
    private $amount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_currency", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount in Currency"})
     */
    private $amountCurrency;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="max_date", type="date", nullable=true, options={"comment"="Max Date of Matched Lines"})
     */
    private $maxDate;

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
     * @var \AccountFullReconcile
     *
     * @ORM\ManyToOne(targetEntity="AccountFullReconcile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="full_reconcile_id", referencedColumnName="id")
     * })
     */
    private $fullReconcile;

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
     *   @ORM\JoinColumn(name="credit_move_id", referencedColumnName="id")
     * })
     */
    private $creditMove;

    /**
     * @var \AccountMoveLine
     *
     * @ORM\ManyToOne(targetEntity="AccountMoveLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="debit_move_id", referencedColumnName="id")
     * })
     */
    private $debitMove;


}
