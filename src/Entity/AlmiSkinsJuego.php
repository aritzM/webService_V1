<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiSkinsJuego
 *
 * @ORM\Table(name="almi_skins_juego", indexes={@ORM\Index(name="IDX_ED07D84A4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_ED07D84A7C455263", columns={"write_uid"})})
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
     * @ORM\Column(name="nombreskin", type="string", nullable=true, options={"comment"="Nombre Skin"})
     */
    private $nombreskin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="blob", nullable=true, options={"comment"="imagen"})
     */
    private $imagen;

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getNombreskin()
    {
        return $this->nombreskin;
    }

    /**
     * @param null|string $nombreskin
     */
    public function setNombreskin($nombreskin)
    {
        $this->nombreskin = $nombreskin;
    }

    /**
     * @return null|string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param null|string $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return null|string
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * @param null|string $ruta
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }

    /**
     * @return null|string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param null|string $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param \DateTime|null $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * @return \DateTime|null
     */
    public function getWriteDate()
    {
        return $this->writeDate;
    }

    /**
     * @param \DateTime|null $writeDate
     */
    public function setWriteDate($writeDate)
    {
        $this->writeDate = $writeDate;
    }

    /**
     * @return \ResUsers
     */
    public function getCreateUid(): \ResUsers
    {
        return $this->createUid;
    }

    /**
     * @param \ResUsers $createUid
     */
    public function setCreateUid(\ResUsers $createUid)
    {
        $this->createUid = $createUid;
    }

    /**
     * @return \ResUsers
     */
    public function getWriteUid(): \ResUsers
    {
        return $this->writeUid;
    }

    /**
     * @param \ResUsers $writeUid
     */
    public function setWriteUid(\ResUsers $writeUid)
    {
        $this->writeUid = $writeUid;
    }


}
