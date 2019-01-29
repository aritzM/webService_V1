<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountGroup
 *
 * @ORM\Table(name="account_group", indexes={@ORM\Index(name="account_group_parent_right_index", columns={"parent_right"}), @ORM\Index(name="account_group_parent_id_index", columns={"parent_id"}), @ORM\Index(name="account_group_parent_left_index", columns={"parent_left"}), @ORM\Index(name="IDX_5B4F9DB47C455263", columns={"write_uid"}), @ORM\Index(name="IDX_5B4F9DB44C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class AccountGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_group_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_left", type="integer", nullable=true)
     */
    private $parentLeft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_right", type="integer", nullable=true)
     */
    private $parentRight;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_prefix", type="string", nullable=true, options={"comment"="Code Prefix"})
     */
    private $codePrefix;

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
     * @var \AccountGroup
     *
     * @ORM\ManyToOne(targetEntity="AccountGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}
