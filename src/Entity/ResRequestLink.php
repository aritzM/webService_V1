<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResRequestLink
 *
 * @ORM\Table(name="res_request_link", indexes={@ORM\Index(name="IDX_4FEE2AF94C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_4FEE2AF97C455263", columns={"write_uid"})})
 * @ORM\Entity
 */
class ResRequestLink
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_request_link_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", nullable=false, options={"comment"="Object"})
     */
    private $object;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true, options={"comment"="Priority"})
     */
    private $priority;

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
     *   @ORM\JoinColumn(name="create_uid", referencedColumnName="id")
     * })
     */
    private $createUid;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="write_uid", referencedColumnName="id")
     * })
     */
    private $writeUid;


}
