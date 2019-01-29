<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPriceList
 *
 * @ORM\Table(name="product_price_list", indexes={@ORM\Index(name="IDX_AAFD55897C455263", columns={"write_uid"}), @ORM\Index(name="IDX_AAFD55894C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_AAFD5589399A0AA2", columns={"price_list"})})
 * @ORM\Entity
 */
class ProductPriceList
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_price_list_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty1", type="integer", nullable=true, options={"comment"="Quantity-1"})
     */
    private $qty1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty2", type="integer", nullable=true, options={"comment"="Quantity-2"})
     */
    private $qty2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty3", type="integer", nullable=true, options={"comment"="Quantity-3"})
     */
    private $qty3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty4", type="integer", nullable=true, options={"comment"="Quantity-4"})
     */
    private $qty4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty5", type="integer", nullable=true, options={"comment"="Quantity-5"})
     */
    private $qty5;

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
     * @var \ProductPricelist
     *
     * @ORM\ManyToOne(targetEntity="ProductPricelist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_list", referencedColumnName="id")
     * })
     */
    private $priceList;


}
