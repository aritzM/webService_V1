<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributeLine
 *
 * @ORM\Table(name="product_attribute_line", indexes={@ORM\Index(name="IDX_D9956E527C455263", columns={"write_uid"}), @ORM\Index(name="IDX_D9956E524C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_D9956E52B6E62EFA", columns={"attribute_id"}), @ORM\Index(name="IDX_D9956E52F1DA9824", columns={"product_tmpl_id"})})
 * @ORM\Entity
 */
class ProductAttributeLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_attribute_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \ProductAttribute
     *
     * @ORM\ManyToOne(targetEntity="ProductAttribute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attribute_id", referencedColumnName="id")
     * })
     */
    private $attribute;

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
