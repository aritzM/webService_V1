<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFiscalPositionTemplate
 *
 * @ORM\Table(name="account_fiscal_position_template", indexes={@ORM\Index(name="IDX_F748CEF37C455263", columns={"write_uid"}), @ORM\Index(name="IDX_F748CEF34C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_F748CEF3CD9E88FA", columns={"country_group_id"}), @ORM\Index(name="IDX_F748CEF3F92F3E70", columns={"country_id"}), @ORM\Index(name="IDX_F748CEF39F96B27", columns={"chart_template_id"})})
 * @ORM\Entity
 */
class AccountFiscalPositionTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_fiscal_position_template_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Fiscal Position Template"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", nullable=true, options={"comment"="Notes"})
     */
    private $note;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auto_apply", type="boolean", nullable=true, options={"comment"="Detect Automatically"})
     */
    private $autoApply;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="vat_required", type="boolean", nullable=true, options={"comment"="VAT required"})
     */
    private $vatRequired;

    /**
     * @var int|null
     *
     * @ORM\Column(name="zip_from", type="integer", nullable=true, options={"comment"="Zip Range From"})
     */
    private $zipFrom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="zip_to", type="integer", nullable=true, options={"comment"="Zip Range To"})
     */
    private $zipTo;

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
     * @var \ResCountryGroup
     *
     * @ORM\ManyToOne(targetEntity="ResCountryGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_group_id", referencedColumnName="id")
     * })
     */
    private $countryGroup;

    /**
     * @var \ResCountry
     *
     * @ORM\ManyToOne(targetEntity="ResCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \AccountChartTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountChartTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chart_template_id", referencedColumnName="id")
     * })
     */
    private $chartTemplate;


}
