<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrEmployee
 *
 * @ORM\Table(name="hr_employee", indexes={@ORM\Index(name="hr_employee_resource_id_index", columns={"resource_id"}), @ORM\Index(name="hr_employee_company_id_index", columns={"company_id"}), @ORM\Index(name="IDX_E67AB75B7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E67AB75B4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_E67AB75B3C105691", columns={"coach_id"}), @ORM\Index(name="IDX_E67AB75B727ACA70", columns={"parent_id"}), @ORM\Index(name="IDX_E67AB75BAE80F5DF", columns={"department_id"}), @ORM\Index(name="IDX_E67AB75BBE04EA9", columns={"job_id"}), @ORM\Index(name="IDX_E67AB75BF5B7AF75", columns={"address_id"}), @ORM\Index(name="IDX_E67AB75B12CB990C", columns={"bank_account_id"}), @ORM\Index(name="IDX_E67AB75BF92F3E70", columns={"country_id"}), @ORM\Index(name="IDX_E67AB75B73283F04", columns={"address_home_id"})})
 * @ORM\Entity
 */
class HrEmployee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hr_employee_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", nullable=true, options={"comment"="Gender"})
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marital", type="string", nullable=true, options={"comment"="Marital Status"})
     */
    private $marital;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthday", type="date", nullable=true, options={"comment"="Date of Birth"})
     */
    private $birthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ssnid", type="string", nullable=true, options={"comment"="SSN No"})
     */
    private $ssnid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sinid", type="string", nullable=true, options={"comment"="SIN No"})
     */
    private $sinid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="identification_id", type="string", nullable=true, options={"comment"="Identification No"})
     */
    private $identificationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="passport_id", type="string", nullable=true, options={"comment"="Passport No"})
     */
    private $passportId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="permit_no", type="string", nullable=true, options={"comment"="Work Permit No"})
     */
    private $permitNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visa_no", type="string", nullable=true, options={"comment"="Visa No"})
     */
    private $visaNo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="visa_expire", type="date", nullable=true, options={"comment"="Visa Expire Date"})
     */
    private $visaExpire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="work_phone", type="string", nullable=true, options={"comment"="Work Phone"})
     */
    private $workPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile_phone", type="string", nullable=true, options={"comment"="Work Mobile"})
     */
    private $mobilePhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="work_email", type="string", nullable=true, options={"comment"="Work Email"})
     */
    private $workEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="work_location", type="string", nullable=true, options={"comment"="Work Location"})
     */
    private $workLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", nullable=true, options={"comment"="Notes"})
     */
    private $notes;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \ResourceResource
     *
     * @ORM\ManyToOne(targetEntity="ResourceResource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     * })
     */
    private $resource;

    /**
     * @var \HrEmployee
     *
     * @ORM\ManyToOne(targetEntity="HrEmployee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="coach_id", referencedColumnName="id")
     * })
     */
    private $coach;

    /**
     * @var \HrEmployee
     *
     * @ORM\ManyToOne(targetEntity="HrEmployee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \HrDepartment
     *
     * @ORM\ManyToOne(targetEntity="HrDepartment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="department_id", referencedColumnName="id")
     * })
     */
    private $department;

    /**
     * @var \HrJob
     *
     * @ORM\ManyToOne(targetEntity="HrJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_id", referencedColumnName="id")
     * })
     */
    private $job;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     * })
     */
    private $address;

    /**
     * @var \ResPartnerBank
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerBank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_account_id", referencedColumnName="id")
     * })
     */
    private $bankAccount;

    /**
     * @var \ResCountry
     *
     * @ORM\ManyToOne(targetEntity="ResCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_home_id", referencedColumnName="id")
     * })
     */
    private $addressHome;


}
