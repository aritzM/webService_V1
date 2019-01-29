<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFiscalPositionTax
 *
 * @ORM\Table(name="account_fiscal_position_tax", uniqueConstraints={@ORM\UniqueConstraint(name="account_fiscal_position_tax_tax_src_dest_uniq", columns={"position_id", "tax_src_id", "tax_dest_id"})}, indexes={@ORM\Index(name="IDX_ED5B09467C455263", columns={"write_uid"}), @ORM\Index(name="IDX_ED5B09464C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_ED5B094638CB389D", columns={"tax_dest_id"}), @ORM\Index(name="IDX_ED5B0946432F4307", columns={"tax_src_id"}), @ORM\Index(name="IDX_ED5B0946DD842E46", columns={"position_id"})})
 * @ORM\Entity
 */
class AccountFiscalPositionTax
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_fiscal_position_tax_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountTax
     *
     * @ORM\ManyToOne(targetEntity="AccountTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_dest_id", referencedColumnName="id")
     * })
     */
    private $taxDest;

    /**
     * @var \AccountTax
     *
     * @ORM\ManyToOne(targetEntity="AccountTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_src_id", referencedColumnName="id")
     * })
     */
    private $taxSrc;

    /**
     * @var \AccountFiscalPosition
     *
     * @ORM\ManyToOne(targetEntity="AccountFiscalPosition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     * })
     */
    private $position;


}
