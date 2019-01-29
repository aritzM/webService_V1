<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountJournalAccountTaxReportRel
 *
 * @ORM\Table(name="account_journal_account_tax_report_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_journal_account_tax_r_account_tax_report_id_account_key", columns={"account_tax_report_id", "account_journal_id"})}, indexes={@ORM\Index(name="account_journal_account_tax_report_rel_account_journal_id_idx", columns={"account_journal_id"}), @ORM\Index(name="account_journal_account_tax_report_re_account_tax_report_id_idx", columns={"account_tax_report_id"})})
 * @ORM\Entity
 */
class AccountJournalAccountTaxReportRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_journal_account_tax_report_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountTaxReport
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_tax_report_id", referencedColumnName="id")
     * })
     */
    private $accountTaxReport;


}
