<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrDepartment
 *
 * @ORM\Table(name="hr_department", indexes={@ORM\Index(name="hr_department_company_id_index", columns={"company_id"}), @ORM\Index(name="hr_department_parent_id_index", columns={"parent_id"}), @ORM\Index(name="IDX_5624F0C47C455263", columns={"write_uid"}), @ORM\Index(name="IDX_5624F0C44C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_5624F0C4783E3463", columns={"manager_id"})})
 * @ORM\Entity
 */
class HrDepartment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hr_department_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Department Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complete_name", type="string", nullable=true, options={"comment"="Complete Name"})
     */
    private $completeName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", nullable=true, options={"comment"="Note"})
     */
    private $note;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

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

    /**
     * @var \HrEmployee
     *
     * @ORM\ManyToOne(targetEntity="HrEmployee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     * })
     */
    private $manager;

    /**
     * @var \HrDepartment
     *
     * @ORM\ManyToOne(targetEntity="HrDepartment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
