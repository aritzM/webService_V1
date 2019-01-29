<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountBankStatementLine
 *
 * @ORM\Table(name="account_bank_statement_line", uniqueConstraints={@ORM\UniqueConstraint(name="account_bank_statement_line_unique_import_id", columns={"unique_import_id"})}, indexes={@ORM\Index(name="account_bank_statement_line_statement_id_index", columns={"statement_id"}), @ORM\Index(name="account_bank_statement_line_sequence_index", columns={"sequence"}), @ORM\Index(name="IDX_DFF5F3707C455263", columns={"write_uid"}), @ORM\Index(name="IDX_DFF5F3704C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_DFF5F37038248176", columns={"currency_id"}), @ORM\Index(name="IDX_DFF5F370979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_DFF5F370478E8802", columns={"journal_id"}), @ORM\Index(name="IDX_DFF5F3709B6B5FBA", columns={"account_id"}), @ORM\Index(name="IDX_DFF5F37012CB990C", columns={"bank_account_id"}), @ORM\Index(name="IDX_DFF5F3709393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class AccountBankStatementLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_bank_statement_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Label"})
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount"})
     */
    private $amount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_name", type="string", nullable=true, options={"comment"="Partner Name"})
     */
    private $partnerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", nullable=true, options={"comment"="Reference"})
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", nullable=true, options={"comment"="Notes"})
     */
    private $note;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_currency", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Amount Currency"})
     */
    private $amountCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="move_name", type="string", nullable=true, options={"comment"="Journal Entry Name"})
     */
    private $moveName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Created on"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true, options={"comment"="Last Updated on"})
     */
    private $writeDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unique_import_id", type="string", nullable=true, options={"comment"="Import ID"})
     */
    private $uniqueImportId;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="write_uid", referencedColumnName="id")
     * })
     */
    private $writeUid;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_uid", referencedColumnName="id")
     * })
     */
    private $createUid;

    /**
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_id", referencedColumnName="id")
     * })
     */
    private $journal;

    /**
     * @var \AccountBankStatement
     *
     * @ORM\ManyToOne(targetEntity="AccountBankStatement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statement_id", referencedColumnName="id")
     * })
     */
    private $statement;

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
     * @var \ResPartnerBank
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerBank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_account_id", referencedColumnName="id")
     * })
     */
    private $bankAccount;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}
