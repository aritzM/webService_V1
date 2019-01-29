<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccountTypeRel
 *
 * @ORM\Table(name="account_account_type_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_account_type_rel_journal_id_account_id_key", columns={"journal_id", "account_id"})}, indexes={@ORM\Index(name="account_account_type_rel_journal_id_idx", columns={"journal_id"}), @ORM\Index(name="account_account_type_rel_account_id_idx", columns={"account_id"})})
 * @ORM\Entity
 */
class AccountAccountTypeRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_account_type_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

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
