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
     * @var string|null
     *
     * @ORM\Column(name="fosuser", type="string", nullable=true, options={"comment"="fosuser"})
     */
    private $fosuser;

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

    public function getId(): int
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getPasswd()
    {
        return $this->passwd;
    }

    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }

    public function getVictoria()
    {
        return $this->victoria;
    }

    public function setVictoria($victoria)
    {
        $this->victoria = $victoria;
    }

    public function getDerrota()
    {
        return $this->derrota;
    }

    public function setDerrota($derrota)
    {
        $this->derrota = $derrota;
    }

    public function getDinero()
    {
        return $this->dinero;
    }

    public function setDinero($dinero)
    {
        $this->dinero = $dinero;
    }

    public function getFosuser()
    {
        return $this->fosuser;
    }

    public function setFosuser($fosuser)
    {
        $this->fosuser = $fosuser;
    }


}
