<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentToken
 *
 * @ORM\Table(name="payment_token", indexes={@ORM\Index(name="IDX_87E97897C455263", columns={"write_uid"}), @ORM\Index(name="IDX_87E97894C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_87E9789924526F1", columns={"acquirer_id"}), @ORM\Index(name="IDX_87E97899393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class PaymentToken
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="payment_token_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="acquirer_ref", type="string", nullable=false, options={"comment"="Acquirer Ref."})
     */
    private $acquirerRef;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verified", type="boolean", nullable=true, options={"comment"="Verified"})
     */
    private $verified;

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
     * @var \PaymentAcquirer
     *
     * @ORM\ManyToOne(targetEntity="PaymentAcquirer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acquirer_id", referencedColumnName="id")
     * })
     */
    private $acquirer;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}
