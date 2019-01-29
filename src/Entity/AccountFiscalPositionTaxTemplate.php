<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFiscalPositionTaxTemplate
 *
 * @ORM\Table(name="account_fiscal_position_tax_template", indexes={@ORM\Index(name="IDX_806F8E547C455263", columns={"write_uid"}), @ORM\Index(name="IDX_806F8E544C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_806F8E5438CB389D", columns={"tax_dest_id"}), @ORM\Index(name="IDX_806F8E54432F4307", columns={"tax_src_id"}), @ORM\Index(name="IDX_806F8E54DD842E46", columns={"position_id"})})
 * @ORM\Entity
 */
class AccountFiscalPositionTaxTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_fiscal_position_tax_template_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_dest_id", referencedColumnName="id")
     * })
     */
    private $taxDest;

    /**
     * @var \AccountTaxTemplate
     *
     * @ORM\ManyToOne(targetEntity="AccountTaxTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_src_id", referencedColumnName="id")
     * })
     */
    private $taxSrc;

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
