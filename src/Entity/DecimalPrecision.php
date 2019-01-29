<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DecimalPrecision
 *
 * @ORM\Table(name="decimal_precision", uniqueConstraints={@ORM\UniqueConstraint(name="decimal_precision_name_uniq", columns={"name"})}, indexes={@ORM\Index(name="decimal_precision_name_index", columns={"name"}), @ORM\Index(name="IDX_B8D2573B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_B8D2573B4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class DecimalPrecision
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="decimal_precision_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Usage"})
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="digits", type="integer", nullable=false, options={"comment"="Digits"})
     */
    private $digits;

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
