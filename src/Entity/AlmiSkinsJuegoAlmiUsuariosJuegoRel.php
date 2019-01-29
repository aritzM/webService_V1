<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiSkinsJuegoAlmiUsuariosJuegoRel
 *
 * @ORM\Table(name="almi_skins_juego_almi_usuarios_juego_rel", uniqueConstraints={@ORM\UniqueConstraint(name="almi_skins_juego_almi_usuario_almi_usuarios_juego_id_almi_s_key", columns={"almi_usuarios_juego_id", "almi_skins_juego_id"})}, indexes={@ORM\Index(name="almi_skins_juego_almi_usuarios_juego_re_almi_skins_juego_id_idx", columns={"almi_skins_juego_id"}), @ORM\Index(name="almi_skins_juego_almi_usuarios_juego_almi_usuarios_juego_id_idx", columns={"almi_usuarios_juego_id"})})
 * @ORM\Entity
 */
class AlmiSkinsJuegoAlmiUsuariosJuegoRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almi_skins_juego_almi_usuarios_juego_rel_id_seq", allocationSize=1, initialValue=1)
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


}
