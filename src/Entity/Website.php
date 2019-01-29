<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Website
 *
 * @ORM\Table(name="website", indexes={@ORM\Index(name="IDX_476F5DE77C455263", columns={"write_uid"}), @ORM\Index(name="IDX_476F5DE74C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_476F5DE7571EDDA", columns={"homepage_id"}), @ORM\Index(name="IDX_476F5DE7A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_476F5DE7F9A46EE1", columns={"default_lang_id"}), @ORM\Index(name="IDX_476F5DE7979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class Website
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="website_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Website Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain", type="string", nullable=true, options={"comment"="Website Domain"})
     */
    private $domain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_lang_code", type="string", nullable=true, options={"comment"="Default language code"})
     */
    private $defaultLangCode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auto_redirect_lang", type="boolean", nullable=true, options={"comment"="Autoredirect Language"})
     */
    private $autoRedirectLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_analytics_key", type="string", nullable=true, options={"comment"="Google Analytics Key"})
     */
    private $googleAnalyticsKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_management_client_id", type="string", nullable=true, options={"comment"="Google Client ID"})
     */
    private $googleManagementClientId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_management_client_secret", type="string", nullable=true, options={"comment"="Google Client Secret"})
     */
    private $googleManagementClientSecret;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cdn_activated", type="boolean", nullable=true, options={"comment"="Activate CDN for assets"})
     */
    private $cdnActivated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cdn_url", type="string", nullable=true, options={"comment"="CDN Base URL"})
     */
    private $cdnUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cdn_filters", type="text", nullable=true, options={"comment"="CDN Filters"})
     */
    private $cdnFilters;

    /**
     * @var string|null
     *
     * @ORM\Column(name="favicon", type="blob", nullable=true, options={"comment"="Website Favicon"})
     */
    private $favicon;

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
     * @var \WebsitePage
     *
     * @ORM\ManyToOne(targetEntity="WebsitePage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="homepage_id", referencedColumnName="id")
     * })
     */
    private $homepage;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \ResLang
     *
     * @ORM\ManyToOne(targetEntity="ResLang")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_lang_id", referencedColumnName="id")
     * })
     */
    private $defaultLang;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
