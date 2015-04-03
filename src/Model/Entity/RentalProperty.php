<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RentalProperty Entity.
 */
class RentalProperty extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'extent' => true,
        'arrangement' => true,
        'address' => true,
        'room' => true,
        'built' => true,
        'status' => true,
        'property_conditions' => true,
    ];
}
