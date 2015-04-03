<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PropertyCondition Entity.
 */
class PropertyCondition extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'rental_property_id' => true,
        'rent' => true,
        'common_fee' => true,
        'parking' => true,
        'bicycle' => true,
        'annual_guarantee_charge' => true,
        'renewal_fee' => true,
        'renewal_extra_fee' => true,
        'insurance_fee' => true,
        'deposit' => true,
        'thanx_fee' => true,
        'initial_guarantee_charge' => true,
        'broker_commission' => true,
        'key_replacement_cost' => true,
        'free_rent' => true,
        'remarks' => true,
        'on_sale' => true,
        'status' => true,
        'rental_property' => true,
    ];
}
