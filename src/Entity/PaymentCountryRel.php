<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentCountryRel
 *
 * @ORM\Table(name="payment_country_rel", uniqueConstraints={@ORM\UniqueConstraint(name="payment_country_rel_payment_id_country_id_key", columns={"payment_id", "country_id"})}, indexes={@ORM\Index(name="payment_country_rel_country_id_idx", columns={"country_id"}), @ORM\Index(name="payment_country_rel_payment_id_idx", columns={"payment_id"})})
 * @ORM\Entity
 */
class PaymentCountryRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="payment_country_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResCountry
     *
     * @ORM\ManyToOne(targetEntity="ResCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \PaymentAcquirer
     *
     * @ORM\ManyToOne(targetEntity="PaymentAcquirer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $payment;


}
