<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFiscalPositionResCountryStateRel
 *
 * @ORM\Table(name="account_fiscal_position_res_country_state_rel", uniqueConstraints={@ORM\UniqueConstraint(name="account_fiscal_position_res_c_account_fiscal_position_id_re_key", columns={"account_fiscal_position_id", "res_country_state_id"})}, indexes={@ORM\Index(name="account_fiscal_position_res_country_st_res_country_state_id_idx", columns={"res_country_state_id"}), @ORM\Index(name="account_fiscal_position_res_coun_account_fiscal_position_id_idx", columns={"account_fiscal_position_id"})})
 * @ORM\Entity
 */
class AccountFiscalPositionResCountryStateRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_fiscal_position_res_country_state_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResCountryState
     *
     * @ORM\ManyToOne(targetEntity="ResCountryState")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_country_state_id", referencedColumnName="id")
     * })
     */
    private $resCountryState;

    /**
     * @var \AccountFiscalPosition
     *
     * @ORM\ManyToOne(targetEntity="AccountFiscalPosition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_fiscal_position_id", referencedColumnName="id")
     * })
     */
    private $accountFiscalPosition;


}
