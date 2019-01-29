<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountJournalAccountPrintJournalRel
 *
 * @ORM\Table(name="account_journal_account_print_journal_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_journal_account_print_account_print_journal_id_acco_key", columns={"account_print_journal_id", "account_journal_id"})}, indexes={@ORM\Index(name="account_journal_account_print_jour_account_print_journal_id_idx", columns={"account_print_journal_id"}), @ORM\Index(name="account_journal_account_print_journal_re_account_journal_id_idx", columns={"account_journal_id"})})
 * @ORM\Entity
 */
class AccountJournalAccountPrintJournalRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_journal_account_print_journal_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountPrintJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountPrintJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_print_journal_id", referencedColumnName="id")
     * })
     */
    private $accountPrintJournal;


}
