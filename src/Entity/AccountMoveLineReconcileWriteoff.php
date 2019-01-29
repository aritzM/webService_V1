<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountMoveLineReconcileWriteoff
 *
 * @ORM\Table(name="account_move_line_reconcile_writeoff", indexes={@ORM\Index(name="IDX_597EEF687C455263", columns={"write_uid"}), @ORM\Index(name="IDX_597EEF684C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_597EEF68345D6718", columns={"analytic_id"}), @ORM\Index(name="IDX_597EEF68AF03F3E2", columns={"writeoff_acc_id"}), @ORM\Index(name="IDX_597EEF68478E8802", columns={"journal_id"})})
 * @ORM\Entity
 */
class AccountMoveLineReconcileWriteoff
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_move_line_reconcile_writeoff_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_p", type="date", nullable=true, options={"comment"="Date"})
     */
    private $dateP;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", nullable=false, options={"comment"="Comment"})
     */
    private $comment;

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
     * @var \AccountAnalyticAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAnalyticAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="analytic_id", referencedColumnName="id")
     * })
     */
    private $analytic;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="writeoff_acc_id", referencedColumnName="id")
     * })
     */
    private $writeoffAcc;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_id", referencedColumnName="id")
     * })
     */
    private $journal;


}
