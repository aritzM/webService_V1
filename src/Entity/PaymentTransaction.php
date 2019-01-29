<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentTransaction
 *
 * @ORM\Table(name="payment_transaction", indexes={@ORM\Index(name="IDX_84BBD50B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_84BBD50B4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_84BBD50B118A5D1", columns={"payment_token_id"}), @ORM\Index(name="IDX_84BBD50B538FB5C7", columns={"callback_model_id"}), @ORM\Index(name="IDX_84BBD50BE3DE3D96", columns={"partner_country_id"}), @ORM\Index(name="IDX_84BBD50B9393F8FE", columns={"partner_id"}), @ORM\Index(name="IDX_84BBD50B38248176", columns={"currency_id"}), @ORM\Index(name="IDX_84BBD50B924526F1", columns={"acquirer_id"})})
 * @ORM\Entity
 */
class PaymentTransaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="payment_transaction_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Creation Date"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_validate", type="datetime", nullable=true, options={"comment"="Validation Date"})
     */
    private $dateValidate;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state_message", type="text", nullable=true, options={"comment"="Message"})
     */
    private $stateMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=false, options={"comment"="Amount"})
     */
    private $amount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fees", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Fees"})
     */
    private $fees;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", nullable=false, options={"comment"="Reference"})
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acquirer_reference", type="string", nullable=true, options={"comment"="Acquirer Reference"})
     */
    private $acquirerReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_name", type="string", nullable=true, options={"comment"="Partner Name"})
     */
    private $partnerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_lang", type="string", nullable=true, options={"comment"="Language"})
     */
    private $partnerLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_email", type="string", nullable=true, options={"comment"="Email"})
     */
    private $partnerEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_zip", type="string", nullable=true, options={"comment"="Zip"})
     */
    private $partnerZip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_address", type="string", nullable=true, options={"comment"="Address"})
     */
    private $partnerAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_city", type="string", nullable=true, options={"comment"="City"})
     */
    private $partnerCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_phone", type="string", nullable=true, options={"comment"="Phone"})
     */
    private $partnerPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="html_3ds", type="string", nullable=true, options={"comment"="3D Secure HTML"})
     */
    private $html3ds;

    /**
     * @var int|null
     *
     * @ORM\Column(name="callback_res_id", type="integer", nullable=true, options={"comment"="Callback Document ID"})
     */
    private $callbackResId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callback_method", type="string", nullable=true, options={"comment"="Callback Method"})
     */
    private $callbackMethod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callback_hash", type="string", nullable=true, options={"comment"="Callback Hash"})
     */
    private $callbackHash;

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
     * @var \PaymentToken
     *
     * @ORM\ManyToOne(targetEntity="PaymentToken")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_token_id", referencedColumnName="id")
     * })
     */
    private $paymentToken;

    /**
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="callback_model_id", referencedColumnName="id")
     * })
     */
    private $callbackModel;

    /**
     * @var \ResCountry
     *
     * @ORM\ManyToOne(targetEntity="ResCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_country_id", referencedColumnName="id")
     * })
     */
    private $partnerCountry;

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
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \PaymentAcquirer
     *
     * @ORM\ManyToOne(targetEntity="PaymentAcquirer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acquirer_id", referencedColumnName="id")
     * })
     */
    private $acquirer;


}
