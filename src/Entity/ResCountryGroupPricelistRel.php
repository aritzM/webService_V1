<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCountryGroupPricelistRel
 *
 * @ORM\Table(name="res_country_group_pricelist_rel", uniqueConstraints={@ORM\UniqueConstraint(name="res_country_group_pricelist_r_pricelist_id_res_country_grou_key", columns={"pricelist_id", "res_country_group_id"})}, indexes={@ORM\Index(name="res_country_group_pricelist_rel_res_country_group_id_idx", columns={"res_country_group_id"}), @ORM\Index(name="res_country_group_pricelist_rel_pricelist_id_idx", columns={"pricelist_id"})})
 * @ORM\Entity
 */
class ResCountryGroupPricelistRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_country_group_pricelist_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResCountryGroup
     *
     * @ORM\ManyToOne(targetEntity="ResCountryGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_country_group_id", referencedColumnName="id")
     * })
     */
    private $resCountryGroup;

    /**
     * @var \ProductPricelist
     *
     * @ORM\ManyToOne(targetEntity="ProductPricelist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pricelist_id", referencedColumnName="id")
     * })
     */
    private $pricelist;


}
