<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentAcquirerPaymentIconRel
 *
 * @ORM\Table(name="payment_acquirer_payment_icon_rel", uniqueConstraints={@ORM\UniqueConstraint(name="payment_acquirer_payment_icon_payment_acquirer_id_payment_i_key", columns={"payment_acquirer_id", "payment_icon_id"})}, indexes={@ORM\Index(name="payment_acquirer_payment_icon_rel_payment_acquirer_id_idx", columns={"payment_acquirer_id"}), @ORM\Index(name="payment_acquirer_payment_icon_rel_payment_icon_id_idx", columns={"payment_icon_id"})})
 * @ORM\Entity
 */
class PaymentAcquirerPaymentIconRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="payment_acquirer_payment_icon_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \PaymentIcon
     *
     * @ORM\ManyToOne(targetEntity="PaymentIcon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_icon_id", referencedColumnName="id")
     * })
     */
    private $paymentIcon;

    /**
     * @var \PaymentAcquirer
     *
     * @ORM\ManyToOne(targetEntity="PaymentAcquirer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_acquirer_id", referencedColumnName="id")
     * })
     */
    private $paymentAcquirer;


}
