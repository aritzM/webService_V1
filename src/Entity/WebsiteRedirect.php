<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteRedirect
 *
 * @ORM\Table(name="website_redirect", indexes={@ORM\Index(name="IDX_121BD7A67C455263", columns={"write_uid"}), @ORM\Index(name="IDX_121BD7A64C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_121BD7A618F45C82", columns={"website_id"})})
 * @ORM\Entity
 */
class WebsiteRedirect
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="website_redirect_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", nullable=true, options={"comment"="Redirection Type"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_from", type="string", nullable=true, options={"comment"="Redirect From"})
     */
    private $urlFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_to", type="string", nullable=true, options={"comment"="Redirect To"})
     */
    private $urlTo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

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
     * @var \Website
     *
     * @ORM\ManyToOne(targetEntity="Website")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="website_id", referencedColumnName="id")
     * })
     */
    private $website;


}
