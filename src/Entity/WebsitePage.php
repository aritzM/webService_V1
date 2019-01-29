<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsitePage
 *
 * @ORM\Table(name="website_page", indexes={@ORM\Index(name="IDX_160F5F547C455263", columns={"write_uid"}), @ORM\Index(name="IDX_160F5F544C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_160F5F5431518C7", columns={"view_id"})})
 * @ORM\Entity
 */
class WebsitePage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="website_page_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", nullable=true, options={"comment"="Page URL"})
     */
    private $url;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="website_indexed", type="boolean", nullable=true, options={"comment"="Page Indexed"})
     */
    private $websiteIndexed;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_publish", type="datetime", nullable=true, options={"comment"="Publishing Date"})
     */
    private $datePublish;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="website_published", type="boolean", nullable=true, options={"comment"="Visible in Website"})
     */
    private $websitePublished;

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
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="view_id", referencedColumnName="id")
     * })
     */
    private $view;


}
