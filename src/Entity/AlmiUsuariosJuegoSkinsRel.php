<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiUsuariosJuegoSkinsRel
 *
 * @ORM\Table(name="almi_usuarios_juego_skins_rel", uniqueConstraints={@ORM\UniqueConstraint(name="almi_usuarios_juego_skins_rel_almi_skins_juego_id_almi_usua_key", columns={"almi_skins_juego_id", "almi_usuarios_juego_id"})}, indexes={@ORM\Index(name="almi_usuarios_juego_skins_rel_almi_skins_juego_id_idx", columns={"almi_skins_juego_id"}), @ORM\Index(name="almi_usuarios_juego_skins_rel_almi_usuarios_juego_id_idx", columns={"almi_usuarios_juego_id"})})
 * @ORM\Entity
 */
class AlmiUsuariosJuegoSkinsRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almi_usuarios_juego_skins_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AlmiSkinsJuego
     *
     * @ORM\ManyToOne(targetEntity="AlmiSkinsJuego")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almi_skins_juego_id", referencedColumnName="id")
     * })
     */
    private $almiSkinsJuego;

    /**
     * @var \AlmiUsuariosJuego
     *
     * @ORM\ManyToOne(targetEntity="AlmiUsuariosJuego")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almi_usuarios_juego_id", referencedColumnName="id")
     * })
     */
    private $almiUsuariosJuego;

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
     * @return \AlmiSkinsJuego
     */
    public function getAlmiSkinsJuego(): \AlmiSkinsJuego
    {
        return $this->almiSkinsJuego;
    }

    /**
     * @param \AlmiSkinsJuego $almiSkinsJuego
     */
    public function setAlmiSkinsJuego(\AlmiSkinsJuego $almiSkinsJuego)
    {
        $this->almiSkinsJuego = $almiSkinsJuego;
    }

    /**
     * @return \AlmiUsuariosJuego
     */
    public function getAlmiUsuariosJuego(): \AlmiUsuariosJuego
    {
        return $this->almiUsuariosJuego;
    }

    /**
     * @param \AlmiUsuariosJuego $almiUsuariosJuego
     */
    public function setAlmiUsuariosJuego(\AlmiUsuariosJuego $almiUsuariosJuego)
    {
        $this->almiUsuariosJuego = $almiUsuariosJuego;
    }


}
