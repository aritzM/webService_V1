<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountBankAccountsWizard
 *
 * @ORM\Table(name="account_bank_accounts_wizard", indexes={@ORM\Index(name="IDX_8158D95F7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_8158D95F4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_8158D95F38248176", columns={"currency_id"}), @ORM\Index(name="IDX_8158D95F12CB990C", columns={"bank_account_id"})})
 * @ORM\Entity
 */
class AccountBankAccountsWizard
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_bank_accounts_wizard_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="acc_name", type="string", nullable=false, options={"comment"="Account Name."})
     */
    private $accName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_type", type="string", nullable=true, options={"comment"="Account Type"})
     */
    private $accountType;

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
     * @var \WizardMultiChartsAccounts
     *
     * @ORM\ManyToOne(targetEntity="WizardMultiChartsAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_account_id", referencedColumnName="id")
     * })
     */
    private $bankAccount;


}
