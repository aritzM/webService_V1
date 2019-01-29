<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountJournalOutboundPaymentMethodRel
 *
 * @ORM\Table(name="account_journal_outbound_payment_method_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_journal_outbound_paym_journal_id_outbound_payment_m_key", columns={"journal_id", "outbound_payment_method"})}, indexes={@ORM\Index(name="account_journal_outbound_payment_me_outbound_payment_method_idx", columns={"outbound_payment_method"}), @ORM\Index(name="account_journal_outbound_payment_method_rel_journal_id_idx", columns={"journal_id"})})
 * @ORM\Entity
 */
class AccountJournalOutboundPaymentMethodRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_journal_outbound_payment_method_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountPaymentMethod
     *
     * @ORM\ManyToOne(targetEntity="AccountPaymentMethod")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="outbound_payment_method", referencedColumnName="id")
     * })
     */
    private $outboundPaymentMethod;

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
