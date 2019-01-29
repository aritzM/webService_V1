<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccount
 *
 * @ORM\Table(name="account_account", uniqueConstraints={@ORM\UniqueConstraint(name="account_account_code_company_uniq", columns={"code", "company_id"})}, indexes={@ORM\Index(name="account_account_code_index", columns={"code"}), @ORM\Index(name="account_account_deprecated_index", columns={"deprecated"}), @ORM\Index(name="account_account_name_index", columns={"name"}), @ORM\Index(name="IDX_B41D42EC7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_B41D42EC4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_B41D42ECFE54D947", columns={"group_id"}), @ORM\Index(name="IDX_B41D42EC979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_B41D42EC9D419299", columns={"user_type_id"}), @ORM\Index(name="IDX_B41D42EC38248176", columns={"currency_id"})})
 * @ORM\Entity
 */
class AccountAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_account_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=64, nullable=false, options={"comment"="Code"})
     */
    private $code;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deprecated", type="boolean", nullable=true, options={"comment"="Deprecated"})
     */
    private $deprecated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="internal_type", type="string", nullable=true, options={"comment"="Internal Type"})
     */
    private $internalType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_time_entries_checked", type="datetime", nullable=true, options={"comment"="Latest Invoices & Payments Matching Date"})
     */
    private $lastTimeEntriesChecked;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reconcile", type="boolean", nullable=true, options={"comment"="Allow Reconciliation"})
     */
    private $reconcile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", nullable=true, options={"comment"="Internal Notes"})
     */
    private $note;

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
     * @var \AccountGroup
     *
     * @ORM\ManyToOne(targetEntity="AccountGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

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
     * @var \AccountAccountType
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_type_id", referencedColumnName="id")
     * })
     */
    private $userType;

    /**
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;


}
