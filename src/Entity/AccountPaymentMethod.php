<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountPaymentMethod
 *
 * @ORM\Table(name="account_payment_method", indexes={@ORM\Index(name="IDX_299665FC7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_299665FC4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class AccountPaymentMethod
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_payment_method_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="code", type="string", nullable=false, options={"comment"="Code"})
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", nullable=false, options={"comment"="Payment Type"})
     */
    private $paymentType;

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


}
