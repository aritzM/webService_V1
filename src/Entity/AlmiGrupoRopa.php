<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiGrupoRopa
 *
 * @ORM\Table(name="almi_grupo_ropa", indexes={@ORM\Index(name="IDX_AC3CD4914C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_AC3CD4917C455263", columns={"write_uid"}), @ORM\Index(name="IDX_AC3CD491864FA8F1", columns={"proveedores"})})
 * @ORM\Entity
 */
class AlmiGrupoRopa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almi_grupo_ropa_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo", type="string", nullable=true, options={"comment"="Codigo"})
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", nullable=true, options={"comment"="Tipo de Prenda"})
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", nullable=true, options={"comment"="Color"})
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descrip", type="text", nullable=true, options={"comment"="Descripcion"})
     */
    private $descrip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="talla", type="string", nullable=true, options={"comment"="Talla"})
     */
    private $talla;

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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Nombre Ropa"})
     */
    private $name;

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
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="write_uid", referencedColumnName="id")
     * })
     */
    private $writeUid;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proveedores", referencedColumnName="id")
     * })
     */
    private $proveedores;


}
