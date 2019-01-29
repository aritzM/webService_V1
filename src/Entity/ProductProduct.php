<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductProduct
 *
 * @ORM\Table(name="product_product", uniqueConstraints={@ORM\UniqueConstraint(name="product_product_barcode_uniq", columns={"barcode"})}, indexes={@ORM\Index(name="product_product_default_code_index", columns={"default_code"}), @ORM\Index(name="product_product_product_tmpl_id_index", columns={"product_tmpl_id"}), @ORM\Index(name="IDX_2931F1D7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2931F1D4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ProductProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_product_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_code", type="string", nullable=true, options={"comment"="Internal Reference"})
     */
    private $defaultCode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barcode", type="string", nullable=true, options={"comment"="Barcode"})
     */
    private $barcode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true, options={"comment"="Volume"})
     */
    private $volume;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Weight"})
     */
    private $weight;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activity_date_deadline", type="date", nullable=true, options={"comment"="Next Activity Deadline"})
     */
    private $activityDateDeadline;

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
     * @var \ProductTemplate
     *
     * @ORM\ManyToOne(targetEntity="ProductTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_tmpl_id", referencedColumnName="id")
     * })
     */
    private $productTmpl;


}
