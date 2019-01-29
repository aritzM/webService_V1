<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountCashboxLine
 *
 * @ORM\Table(name="account_cashbox_line", indexes={@ORM\Index(name="IDX_940C1D987C455263", columns={"write_uid"}), @ORM\Index(name="IDX_940C1D984C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_940C1D9861110C8F", columns={"cashbox_id"})})
 * @ORM\Entity
 */
class AccountCashboxLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_cashbox_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="coin_value", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Coin/Bill Value"})
     */
    private $coinValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number", type="integer", nullable=true, options={"comment"="Number of Coins/Bills"})
     */
    private $number;

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
     * @var \AccountBankStatementCashbox
     *
     * @ORM\ManyToOne(targetEntity="AccountBankStatementCashbox")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cashbox_id", referencedColumnName="id")
     * })
     */
    private $cashbox;


}
