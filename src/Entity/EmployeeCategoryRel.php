<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmployeeCategoryRel
 *
 * @ORM\Table(name="employee_category_rel", uniqueConstraints={@ORM\UniqueConstraint(name="employee_category_rel_category_id_emp_id_key", columns={"category_id", "emp_id"})}, indexes={@ORM\Index(name="employee_category_rel_emp_id_idx", columns={"emp_id"}), @ORM\Index(name="employee_category_rel_category_id_idx", columns={"category_id"})})
 * @ORM\Entity
 */
class EmployeeCategoryRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="employee_category_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \HrEmployee
     *
     * @ORM\ManyToOne(targetEntity="HrEmployee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emp_id", referencedColumnName="id")
     * })
     */
    private $emp;

    /**
     * @var \HrEmployeeCategory
     *
     * @ORM\ManyToOne(targetEntity="HrEmployeeCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;


}
