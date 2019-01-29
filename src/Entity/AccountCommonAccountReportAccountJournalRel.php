<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountCommonAccountReportAccountJournalRel
 *
 * @ORM\Table(name="account_common_account_report_account_journal_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_common_account_report_account_common_account_report_key", columns={"account_common_account_report_id", "account_journal_id"})}, indexes={@ORM\Index(name="account_common_account_report_account_common_account_report_idx", columns={"account_common_account_report_id"}), @ORM\Index(name="account_common_account_report_account_jo_account_journal_id_idx", columns={"account_journal_id"})})
 * @ORM\Entity
 */
class AccountCommonAccountReportAccountJournalRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_common_account_report_account_journal_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountCommonAccountReport
     *
     * @ORM\ManyToOne(targetEntity="AccountCommonAccountReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_common_account_report_id", referencedColumnName="id")
     * })
     */
    private $accountCommonAccountReport;


}
