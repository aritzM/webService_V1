<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountJournalAccountReportPartnerLedgerRel
 *
 * @ORM\Table(name="account_journal_account_report_partner_ledger_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_journal_account_repor_account_report_partner_ledger_key", columns={"account_report_partner_ledger_id", "account_journal_id"})}, indexes={@ORM\Index(name="account_journal_account_repor_account_report_partner_ledger_idx", columns={"account_report_partner_ledger_id"}), @ORM\Index(name="account_journal_account_report_partner_l_account_journal_id_idx", columns={"account_journal_id"})})
 * @ORM\Entity
 */
class AccountJournalAccountReportPartnerLedgerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_journal_account_report_partner_ledger_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountReportPartnerLedger
     *
     * @ORM\ManyToOne(targetEntity="AccountReportPartnerLedger")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_report_partner_ledger_id", referencedColumnName="id")
     * })
     */
    private $accountReportPartnerLedger;


}
