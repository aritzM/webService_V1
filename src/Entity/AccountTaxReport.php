<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountTaxReport
 *
 * @ORM\Table(name="account_tax_report", indexes={@ORM\Index(name="IDX_746EEF8B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_746EEF8B4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_746EEF8B979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class AccountTaxReport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_tax_report_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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


}
