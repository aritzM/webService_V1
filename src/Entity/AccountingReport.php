<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountingReport
 *
 * @ORM\Table(name="accounting_report", indexes={@ORM\Index(name="IDX_4F6182677C455263", columns={"write_uid"}), @ORM\Index(name="IDX_4F6182674C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_4F618267979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_4F61826769A87C9B", columns={"account_report_id"})})
 * @ORM\Entity
 */
class AccountingReport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="accounting_report_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="enable_filter", type="boolean", nullable=true, options={"comment"="Enable Comparison"})
     */
    private $enableFilter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label_filter", type="string", nullable=true, options={"comment"="Column Label"})
     */
    private $labelFilter;

    /**
     * @var string
     *
     * @ORM\Column(name="filter_cmp", type="string", nullable=false, options={"comment"="Filter by"})
     */
    private $filterCmp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_from_cmp", type="date", nullable=true, options={"comment"="Start Date"})
     */
    private $dateFromCmp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_to_cmp", type="date", nullable=true, options={"comment"="End Date"})
     */
    private $dateToCmp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="debit_credit", type="boolean", nullable=true, options={"comment"="Display Debit/Credit Columns"})
     */
    private $debitCredit;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_from", type="date", nullable=true, options={"comment"="Start Date"})
     */
    private $dateFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_to", type="date", nullable=true, options={"comment"="End Date"})
     */
    private $dateTo;

    /**
     * @var string
     *
     * @ORM\Column(name="target_move", type="string", nullable=false, options={"comment"="Target Moves"})
     */
    private $targetMove;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \AccountFinancialReport
     *
     * @ORM\ManyToOne(targetEntity="AccountFinancialReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_report_id", referencedColumnName="id")
     * })
     */
    private $accountReport;


}
