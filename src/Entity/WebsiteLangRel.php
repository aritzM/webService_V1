<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteLangRel
 *
 * @ORM\Table(name="website_lang_rel", uniqueConstraints={@ORM\UniqueConstraint(name="website_lang_rel_website_id_lang_id_key", columns={"website_id", "lang_id"})}, indexes={@ORM\Index(name="website_lang_rel_lang_id_idx", columns={"lang_id"}), @ORM\Index(name="website_lang_rel_website_id_idx", columns={"website_id"})})
 * @ORM\Entity
 */
class WebsiteLangRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="website_lang_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResLang
     *
     * @ORM\ManyToOne(targetEntity="ResLang")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lang_id", referencedColumnName="id")
     * })
     */
    private $lang;

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
