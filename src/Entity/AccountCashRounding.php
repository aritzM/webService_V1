<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountCashRounding
 *
 * @ORM\Table(name="account_cash_rounding", indexes={@ORM\Index(name="IDX_AD0BCF817C455263", columns={"write_uid"}), @ORM\Index(name="IDX_AD0BCF814C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_AD0BCF819B6B5FBA", columns={"account_id"})})
 * @ORM\Entity
 */
class AccountCashRounding
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_cash_rounding_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="rounding", type="float", precision=10, scale=0, nullable=false, options={"comment"="Rounding Precision"})
     */
    private $rounding;

    /**
     * @var string
     *
     * @ORM\Column(name="strategy", type="string", nullable=false, options={"comment"="Rounding Strategy"})
     */
    private $strategy;

    /**
     * @var string
     *
     * @ORM\Column(name="rounding_method", type="string", nullable=false, options={"comment"="Rounding Method"})
     */
    private $roundingMethod;

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
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;


}
