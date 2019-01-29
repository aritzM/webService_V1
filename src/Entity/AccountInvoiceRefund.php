<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvoiceRefund
 *
 * @ORM\Table(name="account_invoice_refund", indexes={@ORM\Index(name="IDX_B2ED4D017C455263", columns={"write_uid"}), @ORM\Index(name="IDX_B2ED4D014C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class AccountInvoiceRefund
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_invoice_refund_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invoice", type="date", nullable=false, options={"comment"="Credit Note Date"})
     */
    private $dateInvoice;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true, options={"comment"="Accounting Date"})
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=false, options={"comment"="Reason"})
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="filter_refund", type="string", nullable=false, options={"comment"="Refund Method"})
     */
    private $filterRefund;

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
