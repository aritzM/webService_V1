<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteWebsitePageRel
 *
 * @ORM\Table(name="website_website_page_rel", uniqueConstraints={@ORM\UniqueConstraint(name="website_website_page_rel_website_page_id_website_id_key", columns={"website_page_id", "website_id"})}, indexes={@ORM\Index(name="website_website_page_rel_website_page_id_idx", columns={"website_page_id"}), @ORM\Index(name="website_website_page_rel_website_id_idx", columns={"website_id"})})
 * @ORM\Entity
 */
class WebsiteWebsitePageRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="website_website_page_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     *   @ORM\JoinColumn(name="website_page_id", referencedColumnName="id")
     * })
     */
    private $websitePage;


}
