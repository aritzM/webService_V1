<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountMoveLineReconcile
 *
 * @ORM\Table(name="account_move_line_reconcile", indexes={@ORM\Index(name="IDX_781F72107C455263", columns={"write_uid"}), @ORM\Index(name="IDX_781F72104C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_781F7210979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class AccountMoveLineReconcile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_move_line_reconcile_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="trans_nbr", type="integer", nullable=true, options={"comment"="# of Transaction"})
     */
    private $transNbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="credit", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Credit amount"})
     */
    private $credit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="debit", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Debit amount"})
     */
    private $debit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="writeoff", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Write-Off amount"})
     */
    private $writeoff;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
