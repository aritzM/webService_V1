<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortalWizardUser
 *
 * @ORM\Table(name="portal_wizard_user", indexes={@ORM\Index(name="IDX_79A782497C455263", columns={"write_uid"}), @ORM\Index(name="IDX_79A782494C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_79A78249A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_79A782499393F8FE", columns={"partner_id"}), @ORM\Index(name="IDX_79A7824998899D61", columns={"wizard_id"})})
 * @ORM\Entity
 */
class PortalWizardUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="portal_wizard_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", nullable=true, options={"comment"="Email"})
     */
    private $email;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="in_portal", type="boolean", nullable=true, options={"comment"="In Portal"})
     */
    private $inPortal;

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
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var \PortalWizard
     *
     * @ORM\ManyToOne(targetEntity="PortalWizard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wizard_id", referencedColumnName="id")
     * })
     */
    private $wizard;


}
