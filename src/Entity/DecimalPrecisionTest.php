<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DecimalPrecisionTest
 *
 * @ORM\Table(name="decimal_precision_test", indexes={@ORM\Index(name="IDX_A76075757C455263", columns={"write_uid"}), @ORM\Index(name="IDX_A76075754C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class DecimalPrecisionTest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="decimal_precision_test_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="float", type="float", precision=10, scale=0, nullable=true, options={"comment"="Float"})
     */
    private $float;

    /**
     * @var string|null
     *
     * @ORM\Column(name="float_2", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Float 2"})
     */
    private $float2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="float_4", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Float 4"})
     */
    private $float4;

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
