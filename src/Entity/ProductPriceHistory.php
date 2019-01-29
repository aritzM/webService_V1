<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPriceHistory
 *
 * @ORM\Table(name="product_price_history", indexes={@ORM\Index(name="IDX_9671A4E57C455263", columns={"write_uid"}), @ORM\Index(name="IDX_9671A4E54C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_9671A4E54584665A", columns={"product_id"}), @ORM\Index(name="IDX_9671A4E5979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class ProductPriceHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_price_history_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=true, options={"comment"="Date"})
     */
    private $datetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cost", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Cost"})
     */
    private $cost;

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
     * @var \ProductProduct
     *
     * @ORM\ManyToOne(targetEntity="ProductProduct")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

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
