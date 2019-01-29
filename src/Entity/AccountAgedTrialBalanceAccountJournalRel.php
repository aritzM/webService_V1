<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAgedTrialBalanceAccountJournalRel
 *
 * @ORM\Table(name="account_aged_trial_balance_account_journal_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_aged_trial_balance_ac_account_aged_trial_balance_id_key", columns={"account_aged_trial_balance_id", "account_journal_id"})}, indexes={@ORM\Index(name="account_aged_trial_balance_ac_account_aged_trial_balance_id_idx", columns={"account_aged_trial_balance_id"}), @ORM\Index(name="account_aged_trial_balance_account_journ_account_journal_id_idx", columns={"account_journal_id"})})
 * @ORM\Entity
 */
class AccountAgedTrialBalanceAccountJournalRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_aged_trial_balance_account_journal_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountAgedTrialBalance
     *
     * @ORM\ManyToOne(targetEntity="AccountAgedTrialBalance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_aged_trial_balance_id", referencedColumnName="id")
     * })
     */
    private $accountAgedTrialBalance;


}
