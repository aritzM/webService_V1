<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiUsuariosJuego
 *
 * @ORM\Table(name="almi_usuarios_juego", indexes={@ORM\Index(name="IDX_9B44573C4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_9B44573C7C455263", columns={"write_uid"})})
 * @ORM\Entity
 */
class AlmiUsuariosJuego
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almi_usuarios_juego_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fosuser", type="string", nullable=true, options={"comment"="fosuser"})
     */
    private $fosuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Nombre"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido", type="string", nullable=true, options={"comment"="Apellido"})
     */
    private $apellido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usuario", type="string", nullable=true, options={"comment"="Nombre Usuario"})
     */
    private $usuario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="passwd", type="string", nullable=true, options={"comment"="Password Usuario"})
     */
    private $passwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="victoria", type="string", nullable=true, options={"comment"="Victorias Obtenidas"})
     */
    private $victoria;

    /**
     * @var string|null
     *
     * @ORM\Column(name="derrota", type="string", nullable=true, options={"comment"="Derrotas Obtenidas"})
     */
    private $derrota;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dinero", type="string", nullable=true, options={"comment"="Dinero que tiene la cuenta"})
     */
    private $dinero;

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
    public function getFosuser()
    {
        return $this->fosuser;
    }

    /**
     * @param null|string $fosuser
     */
    public function setFosuser($fosuser)
    {
        $this->fosuser = $fosuser;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param null|string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return null|string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param null|string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return null|string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * @param null|string $passwd
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }

    /**
     * @return null|string
     */
    public function getVictoria()
    {
        return $this->victoria;
    }

    /**
     * @param null|string $victoria
     */
    public function setVictoria($victoria)
    {
        $this->victoria = $victoria;
    }

    /**
     * @return null|string
     */
    public function getDerrota()
    {
        return $this->derrota;
    }

    /**
     * @param null|string $derrota
     */
    public function setDerrota($derrota)
    {
        $this->derrota = $derrota;
    }

    /**
     * @return null|string
     */
    public function getDinero()
    {
        return $this->dinero;
    }

    /**
     * @param null|string $dinero
     */
    public function setDinero($dinero)
    {
        $this->dinero = $dinero;
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


    public function getCreateUid()
    {
        return $this->createUid;
    }

    public function setCreateUid($createUid)
    {
        $this->createUid = $createUid;
    }

    public function getWriteUid(){
        return $this->writeUid;
    }

    public function setWriteUid($writeUid)
    {
        $this->writeUid = $writeUid;
    }


}
