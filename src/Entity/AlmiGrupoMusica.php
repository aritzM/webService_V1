<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiGrupoMusica
 *
 * @ORM\Table(name="almi_grupo_musica", indexes={@ORM\Index(name="IDX_182EBBC44C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_182EBBC47C455263", columns={"write_uid"})})
 * @ORM\Entity
 */
class AlmiGrupoMusica
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almi_grupo_musica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_name", type="string", length=50, nullable=true, options={"comment"="Nombre Grupo"})
     */
    private $shortName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genero", type="string", nullable=true, options={"comment"="Genero Musical"})
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="miembros", type="text", nullable=false, options={"comment"="Miembros"})
     */
    private $miembros;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manager", type="string", length=50, nullable=true, options={"comment"="Manager Musical"})
     */
    private $manager;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notas", type="text", nullable=true, options={"comment"="Notas Internas"})
     */
    private $notas;

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
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="titulo"})
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


}
