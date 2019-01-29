<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccountTemplate
 *
 * @ORM\Table(name="account_account_template", indexes={@ORM\Index(name="account_account_template_code_index", columns={"code"}), @ORM\Index(name="account_account_template_name_index", columns={"name"}), @ORM\Index(name="IDX_894841E17C455263", columns={"write_uid"}), @ORM\Index(name="IDX_894841E14C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_894841E1FE54D947", columns={"group_id"}), @ORM\Index(name="IDX_894841E19F96B27", columns={"chart_template_id"}), @ORM\Index(name="IDX_894841E19D419299", columns={"user_type_id"}), @ORM\Index(name="IDX_894841E138248176", columns={"currency_id"})})
 * @ORM\Entity
 */
class AccountAccountTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_account_template_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="reconcile", type="boolean", nullable=true, options={"comment"="Allow Invoices & payments Matching"})
     */
    private $reconcile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", nullable=true, options={"comment"="Note"})
     */
    private $note;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="nocreate", type="boolean", nullable=true, options={"comment"="Optional Create"})
     */
    private $nocreate;

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
     * @var \AccountChartTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountChartTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chart_template_id", referencedColumnName="id")
     * })
     */
    private $chartTemplate;

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
