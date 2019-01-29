<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountJournalAccountingReportRel
 *
 * @ORM\Table(name="account_journal_accounting_report_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_journal_accounting_re_accounting_report_id_account__key", columns={"accounting_report_id", "account_journal_id"})}, indexes={@ORM\Index(name="account_journal_accounting_report_rel_account_journal_id_idx", columns={"account_journal_id"}), @ORM\Index(name="account_journal_accounting_report_rel_accounting_report_id_idx", columns={"accounting_report_id"})})
 * @ORM\Entity
 */
class AccountJournalAccountingReportRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_journal_accounting_report_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_journal_id", referencedColumnName="id")
     * })
     */
    private $accountJournal;

    /**
     * @var \AccountingReport
     *
     * @ORM\ManyToOne(targetEntity="AccountingReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accounting_report_id", referencedColumnName="id")
     * })
     */
    private $accountingReport;


}
