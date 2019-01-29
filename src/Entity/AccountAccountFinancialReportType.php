<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccountFinancialReportType
 *
 * @ORM\Table(name="account_account_financial_report_type", uniqueConstraints={@ORM\UniqueConstraint(name="account_account_financial_report__report_id_account_type_id_key", columns={"report_id", "account_type_id"})}, indexes={@ORM\Index(name="account_account_financial_report_type_account_type_id_idx", columns={"account_type_id"}), @ORM\Index(name="account_account_financial_report_type_report_id_idx", columns={"report_id"})})
 * @ORM\Entity
 */
class AccountAccountFinancialReportType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_account_financial_report_type_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AccountAccountType
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_type_id", referencedColumnName="id")
     * })
     */
    private $accountType;

    /**
     * @var \AccountFinancialReport
     *
     * @ORM\ManyToOne(targetEntity="AccountFinancialReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_id", referencedColumnName="id")
     * })
     */
    private $report;


}
