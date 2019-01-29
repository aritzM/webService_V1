<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrJob
 *
 * @ORM\Table(name="hr_job", uniqueConstraints={@ORM\UniqueConstraint(name="hr_job_name_company_uniq", columns={"name", "company_id", "department_id"})}, indexes={@ORM\Index(name="hr_job_name_index", columns={"name"}), @ORM\Index(name="IDX_4180B9257C455263", columns={"write_uid"}), @ORM\Index(name="IDX_4180B9254C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_4180B925979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_4180B925AE80F5DF", columns={"department_id"})})
 * @ORM\Entity
 */
class HrJob
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hr_job_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Job Position"})
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="expected_employees", type="integer", nullable=true, options={"comment"="Total Forecasted Employees"})
     */
    private $expectedEmployees;

    /**
     * @var int|null
     *
     * @ORM\Column(name="no_of_employee", type="integer", nullable=true, options={"comment"="Current Number of Employees"})
     */
    private $noOfEmployee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="no_of_recruitment", type="integer", nullable=true, options={"comment"="Expected New Employees"})
     */
    private $noOfRecruitment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="no_of_hired_employee", type="integer", nullable=true, options={"comment"="Hired Employees"})
     */
    private $noOfHiredEmployee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Job Description"})
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requirements", type="text", nullable=true, options={"comment"="Requirements"})
     */
    private $requirements;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false, options={"comment"="Status"})
     */
    private $state;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \HrDepartment
     *
     * @ORM\ManyToOne(targetEntity="HrDepartment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="department_id", referencedColumnName="id")
     * })
     */
    private $department;


}
