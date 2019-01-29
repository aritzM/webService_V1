<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountJournalTypeRel
 *
 * @ORM\Table(name="account_journal_type_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_journal_type_rel_journal_id_type_id_key", columns={"journal_id", "type_id"})}, indexes={@ORM\Index(name="account_journal_type_rel_type_id_idx", columns={"type_id"}), @ORM\Index(name="account_journal_type_rel_journal_id_idx", columns={"journal_id"})})
 * @ORM\Entity
 */
class AccountJournalTypeRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_journal_type_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountAccountType
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

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
