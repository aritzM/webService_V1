<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFiscalPositionAccount
 *
 * @ORM\Table(name="account_fiscal_position_account", uniqueConstraints={@ORM\UniqueConstraint(name="account_fiscal_position_account_account_src_dest_uniq", columns={"position_id", "account_src_id", "account_dest_id"})}, indexes={@ORM\Index(name="IDX_E569F33B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E569F33B4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_E569F33BB0A88CDF", columns={"account_dest_id"}), @ORM\Index(name="IDX_E569F33B28C1E7DF", columns={"account_src_id"}), @ORM\Index(name="IDX_E569F33BDD842E46", columns={"position_id"})})
 * @ORM\Entity
 */
class AccountFiscalPositionAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_fiscal_position_account_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_dest_id", referencedColumnName="id")
     * })
     */
    private $accountDest;

    /**
     * @var \AccountAccount
     *
     * @ORM\ManyToOne(targetEntity="AccountAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_src_id", referencedColumnName="id")
     * })
     */
    private $accountSrc;

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
