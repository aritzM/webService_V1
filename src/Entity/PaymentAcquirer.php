<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentAcquirer
 *
 * @ORM\Table(name="payment_acquirer", indexes={@ORM\Index(name="IDX_C56D51C27C455263", columns={"write_uid"}), @ORM\Index(name="IDX_C56D51C24C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_C56D51C2AFC2B591", columns={"module_id"}), @ORM\Index(name="IDX_C56D51C2478E8802", columns={"journal_id"}), @ORM\Index(name="IDX_C56D51C27474F4A2", columns={"registration_view_template_id"}), @ORM\Index(name="IDX_C56D51C2BB4B2395", columns={"view_template_id"}), @ORM\Index(name="IDX_C56D51C2979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class PaymentAcquirer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="payment_acquirer_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Description"})
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="string", nullable=false, options={"comment"="Provider"})
     */
    private $provider;

    /**
     * @var string
     *
     * @ORM\Column(name="environment", type="string", nullable=false, options={"comment"="Environment"})
     */
    private $environment;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="website_published", type="boolean", nullable=true, options={"comment"="Visible in Portal / Website"})
     */
    private $websitePublished;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="capture_manually", type="boolean", nullable=true, options={"comment"="Capture Amount Manually"})
     */
    private $captureManually;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="specific_countries", type="boolean", nullable=true, options={"comment"="Specific Countries"})
     */
    private $specificCountries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pre_msg", type="text", nullable=true, options={"comment"="Help Message"})
     */
    private $preMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="post_msg", type="text", nullable=true, options={"comment"="Thanks Message"})
     */
    private $postMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pending_msg", type="text", nullable=true, options={"comment"="Pending Message"})
     */
    private $pendingMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="done_msg", type="text", nullable=true, options={"comment"="Done Message"})
     */
    private $doneMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cancel_msg", type="text", nullable=true, options={"comment"="Cancel Message"})
     */
    private $cancelMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="error_msg", type="text", nullable=true, options={"comment"="Error Message"})
     */
    private $errorMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="save_token", type="string", nullable=true, options={"comment"="Save Cards"})
     */
    private $saveToken;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="fees_active", type="boolean", nullable=true, options={"comment"="Add Extra Fees"})
     */
    private $feesActive;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fees_dom_fixed", type="float", precision=10, scale=0, nullable=true, options={"comment"="Fixed domestic fees"})
     */
    private $feesDomFixed;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fees_dom_var", type="float", precision=10, scale=0, nullable=true, options={"comment"="Variable domestic fees (in percents)"})
     */
    private $feesDomVar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fees_int_fixed", type="float", precision=10, scale=0, nullable=true, options={"comment"="Fixed international fees"})
     */
    private $feesIntFixed;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fees_int_var", type="float", precision=10, scale=0, nullable=true, options={"comment"="Variable international fees (in percents)"})
     */
    private $feesIntVar;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_flow", type="string", nullable=false, options={"comment"="Payment Flow"})
     */
    private $paymentFlow;

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
     * @var \IrModuleModule
     *
     * @ORM\ManyToOne(targetEntity="IrModuleModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     * })
     */
    private $module;

    /**
     * @var \AccountJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_id", referencedColumnName="id")
     * })
     */
    private $journal;

    /**
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="registration_view_template_id", referencedColumnName="id")
     * })
     */
    private $registrationViewTemplate;

    /**
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="view_template_id", referencedColumnName="id")
     * })
     */
    private $viewTemplate;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
