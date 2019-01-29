<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiSkinsJuego
 *
 * @ORM\Table(name="almi_skins_juego", indexes={@ORM\Index(name="IDX_ED07D84A7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_ED07D84A4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class AlmiSkinsJuego
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almi_skins_juego_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombreSkin", type="string", nullable=true, options={"comment"="Nombre Skin"})
     */
    private $nombreskin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruta", type="string", nullable=true, options={"comment"="Ruta local de Sprite"})
     */
    private $ruta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="precio", type="string", nullable=true, options={"comment"="Precio skin"})
     */
    private $precio;

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
     * @ORM\Column(name="imagen", type="blob", nullable=true, options={"comment"="imagen"})
     */
    private $imagen;

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
