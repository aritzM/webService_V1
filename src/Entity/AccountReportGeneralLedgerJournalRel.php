<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountReportGeneralLedgerJournalRel
 *
 * @ORM\Table(name="account_report_general_ledger_journal_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_report_general_ledger_journal_account_id_journal_id_key", columns={"account_id", "journal_id"})}, indexes={@ORM\Index(name="account_report_general_ledger_journal_rel_journal_id_idx", columns={"journal_id"}), @ORM\Index(name="account_report_general_ledger_journal_rel_account_id_idx", columns={"account_id"})})
 * @ORM\Entity
 */
class AccountReportGeneralLedgerJournalRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_report_general_ledger_journal_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_id", referencedColumnName="id")
     * })
     */
    private $journal;

    /**
     * @var \AccountReportGeneralLedger
     *
     * @ORM\ManyToOne(targetEntity="AccountReportGeneralLedger")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;


}
