<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseImportTestsModelsCharStates
 *
 * @ORM\Table(name="base_import_tests_models_char_states", indexes={@ORM\Index(name="IDX_472B6CFA4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_472B6CFA7C455263", columns={"write_uid"})})
 * @ORM\Entity
 */
class BaseImportTestsModelsCharStates
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_import_tests_models_char_states_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", nullable=true, options={"comment"="Value"})
     */
    private $value;

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


}
