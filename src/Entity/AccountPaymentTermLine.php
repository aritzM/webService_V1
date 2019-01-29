<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountPaymentTermLine
 *
 * @ORM\Table(name="account_payment_term_line", indexes={@ORM\Index(name="account_payment_term_line_payment_id_index", columns={"payment_id"}), @ORM\Index(name="IDX_943219877C455263", columns={"write_uid"}), @ORM\Index(name="IDX_943219874C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class AccountPaymentTermLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_payment_term_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", nullable=false, options={"comment"="Type"})
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_amount", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Value"})
     */
    private $valueAmount;

    /**
     * @var int
     *
     * @ORM\Column(name="days", type="integer", nullable=false, options={"comment"="Number of Days"})
     */
    private $days;

    /**
     * @var string
     *
     * @ORM\Column(name="option", type="string", nullable=false, options={"comment"="Options"})
     */
    private $option;

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
     * @var \AccountPaymentTerm
     *
     * @ORM\ManyToOne(targetEntity="AccountPaymentTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $payment;


}
