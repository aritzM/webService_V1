<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFinancialReport
 *
 * @ORM\Table(name="account_financial_report", indexes={@ORM\Index(name="IDX_96997E37C455263", columns={"write_uid"}), @ORM\Index(name="IDX_96997E34C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_96997E369A87C9B", columns={"account_report_id"}), @ORM\Index(name="IDX_96997E3727ACA70", columns={"parent_id"})})
 * @ORM\Entity
 */
class AccountFinancialReport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_financial_report_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Report Name"})
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level", type="integer", nullable=true, options={"comment"="Level"})
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", nullable=true, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="sign", type="integer", nullable=false, options={"comment"="Sign on Reports"})
     */
    private $sign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_detail", type="string", nullable=true, options={"comment"="Display details"})
     */
    private $displayDetail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="style_overwrite", type="integer", nullable=true, options={"comment"="Financial Report Style"})
     */
    private $styleOverwrite;

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
     * @var \AccountFinancialReport
     *
     * @ORM\ManyToOne(targetEntity="AccountFinancialReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_report_id", referencedColumnName="id")
     * })
     */
    private $accountReport;

    /**
     * @var \AccountFinancialReport
     *
     * @ORM\ManyToOne(targetEntity="AccountFinancialReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}
