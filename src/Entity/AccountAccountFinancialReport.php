<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccountFinancialReport
 *
 * @ORM\Table(name="account_account_financial_report", uniqueConstraints={@ORM\UniqueConstraint(name="account_account_financial_report_report_line_id_account_id_key", columns={"report_line_id", "account_id"})}, indexes={@ORM\Index(name="account_account_financial_report_report_line_id_idx", columns={"report_line_id"}), @ORM\Index(name="account_account_financial_report_account_id_idx", columns={"account_id"})})
 * @ORM\Entity
 */
class AccountAccountFinancialReport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_account_financial_report_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountFinancialReport
     *
     * @ORM\ManyToOne(targetEntity="AccountFinancialReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_line_id", referencedColumnName="id")
     * })
     */
    private $reportLine;


}
