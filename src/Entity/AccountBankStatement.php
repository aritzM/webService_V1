<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountBankStatement
 *
 * @ORM\Table(name="account_bank_statement", indexes={@ORM\Index(name="account_bank_statement_date_index", columns={"date"}), @ORM\Index(name="IDX_E1C1C3E57C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E1C1C3E54C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_E1C1C3E5E43E5667", columns={"cashbox_end_id"}), @ORM\Index(name="IDX_E1C1C3E58D268ED6", columns={"cashbox_start_id"}), @ORM\Index(name="IDX_E1C1C3E5A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_E1C1C3E5979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_E1C1C3E5478E8802", columns={"journal_id"})})
 * @ORM\Entity
 */
class AccountBankStatement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_bank_statement_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Reference"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", nullable=true, options={"comment"="External Reference"})
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_done", type="datetime", nullable=true, options={"comment"="Closed On"})
     */
    private $dateDone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balance_start", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Starting Balance"})
     */
    private $balanceStart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balance_end_real", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Ending Balance"})
     */
    private $balanceEndReal;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_entry_encoding", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Transactions Subtotal"})
     */
    private $totalEntryEncoding;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balance_end", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Computed Balance"})
     */
    private $balanceEnd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="difference", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Difference"})
     */
    private $difference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

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
     *   @ORM\JoinColumn(name="cashbox_end_id", referencedColumnName="id")
     * })
     */
    private $cashboxEnd;

    /**
     * @var \AccountBankStatementCashbox
     *
     * @ORM\ManyToOne(targetEntity="AccountBankStatementCashbox")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cashbox_start_id", referencedColumnName="id")
     * })
     */
    private $cashboxStart;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

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
