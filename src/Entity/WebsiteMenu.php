<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteMenu
 *
 * @ORM\Table(name="website_menu", indexes={@ORM\Index(name="website_menu_parent_left_index", columns={"parent_left"}), @ORM\Index(name="website_menu_parent_right_index", columns={"parent_right"}), @ORM\Index(name="website_menu_parent_id_index", columns={"parent_id"}), @ORM\Index(name="IDX_7F00D3E77C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7F00D3E74C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_7F00D3E718F45C82", columns={"website_id"}), @ORM\Index(name="IDX_7F00D3E7C4663E4", columns={"page_id"})})
 * @ORM\Entity
 */
class WebsiteMenu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="website_menu_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Menu"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", nullable=true, options={"comment"="Url"})
     */
    private $url;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="new_window", type="boolean", nullable=true, options={"comment"="New Window"})
     */
    private $newWindow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

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
     * @var \WebsiteMenu
     *
     * @ORM\ManyToOne(targetEntity="WebsiteMenu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \Website
     *
     * @ORM\ManyToOne(targetEntity="Website")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="website_id", referencedColumnName="id")
     * })
     */
    private $website;

    /**
     * @var \WebsitePage
     *
     * @ORM\ManyToOne(targetEntity="WebsitePage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     * })
     */
    private $page;


}
