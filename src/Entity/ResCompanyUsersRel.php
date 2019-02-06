<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCompanyUsersRel
 *
 * @ORM\Table(name="res_company_users_rel", uniqueConstraints={@ORM\UniqueConstraint(name="res_company_users_rel_cid_user_id_key", columns={"cid", "user_id"})}, indexes={@ORM\Index(name="res_company_users_rel_cid_idx", columns={"cid"}), @ORM\Index(name="res_company_users_rel_user_id_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class ResCompanyUsersRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_company_users_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cid", referencedColumnName="id")
     * })
     */
    private $cid;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
