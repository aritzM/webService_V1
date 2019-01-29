<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFullReconcile
 *
 * @ORM\Table(name="account_full_reconcile", indexes={@ORM\Index(name="IDX_D6A4301F7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_D6A4301F4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_D6A4301F2A0F9729", columns={"exchange_move_id"})})
 * @ORM\Entity
 */
class AccountFullReconcile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_full_reconcile_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Number"})
     */
    private $name;

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
     * @var \AccountMove
     *
     * @ORM\ManyToOne(targetEntity="AccountMove")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exchange_move_id", referencedColumnName="id")
     * })
     */
    private $exchangeMove;


}
