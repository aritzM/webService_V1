<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseLanguageInstallWebsiteRel
 *
 * @ORM\Table(name="base_language_install_website_rel", uniqueConstraints={@ORM\UniqueConstraint(name="base_language_install_website_base_language_install_id_webs_key", columns={"base_language_install_id", "website_id"})}, indexes={@ORM\Index(name="base_language_install_website_rel_base_language_install_id_idx", columns={"base_language_install_id"}), @ORM\Index(name="base_language_install_website_rel_website_id_idx", columns={"website_id"})})
 * @ORM\Entity
 */
class BaseLanguageInstallWebsiteRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_language_install_website_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \BaseLanguageInstall
     *
     * @ORM\ManyToOne(targetEntity="BaseLanguageInstall")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_language_install_id", referencedColumnName="id")
     * })
     */
    private $baseLanguageInstall;


}
