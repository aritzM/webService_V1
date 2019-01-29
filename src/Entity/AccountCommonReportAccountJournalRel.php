<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountCommonReportAccountJournalRel
 *
 * @ORM\Table(name="account_common_report_account_journal_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_common_report_account_account_common_report_id_acco_key", columns={"account_common_report_id", "account_journal_id"})}, indexes={@ORM\Index(name="account_common_report_account_jour_account_common_report_id_idx", columns={"account_common_report_id"}), @ORM\Index(name="account_common_report_account_journal_re_account_journal_id_idx", columns={"account_journal_id"})})
 * @ORM\Entity
 */
class AccountCommonReportAccountJournalRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_common_report_account_journal_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountCommonReport
     *
     * @ORM\ManyToOne(targetEntity="AccountCommonReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_common_report_id", referencedColumnName="id")
     * })
     */
    private $accountCommonReport;


}
