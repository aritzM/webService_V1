<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFiscalPositionAccountTemplate
 *
 * @ORM\Table(name="account_fiscal_position_account_template", indexes={@ORM\Index(name="IDX_3C8794427C455263", columns={"write_uid"}), @ORM\Index(name="IDX_3C8794424C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_3C879442B0A88CDF", columns={"account_dest_id"}), @ORM\Index(name="IDX_3C87944228C1E7DF", columns={"account_src_id"}), @ORM\Index(name="IDX_3C879442DD842E46", columns={"position_id"})})
 * @ORM\Entity
 */
class AccountFiscalPositionAccountTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_fiscal_position_account_template_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_dest_id", referencedColumnName="id")
     * })
     */
    private $accountDest;

    /**
     * @var \AccountAccountTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountAccountTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_src_id", referencedColumnName="id")
     * })
     */
    private $accountSrc;

    /**
     * @var \AccountFiscalPositionTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountFiscalPositionTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     * })
     */
    private $position;


}
