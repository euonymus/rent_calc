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

    public static $taxIncludeds = array(
        'renewal_extra_fee',
        'broker_commission',
        'key_replacement_cost',
    );

    const TAX_RATE = 1.08;

    /****************************************************************************/
    /* Calculation                                                              */
    /****************************************************************************/
    public static function calcInitialCost($data) {
      if (!\Euonymus\U::arrPrepared('rent', $data)
	  || !\Euonymus\U::arrPrepared('deposit', $data)
	  || !\Euonymus\U::arrPrepared('thanx_fee', $data)
	  || !\Euonymus\U::arrPrepared('initial_guarantee_charge', $data)
	  || !\Euonymus\U::arrPrepared('broker_commission', $data)
	  || !\Euonymus\U::arrPrepared('key_replacement_cost', $data)
	  || !\Euonymus\U::arrPrepared('free_rent', $data)
	  ) {
	return false;
      }

      $withouttax = $data['deposit'] + $data['thanx_fee'] + $data['initial_guarantee_charge'];
      $withtax    = $data['broker_commission'] * self::TAX_RATE;
      $key_cost   = $data['key_replacement_cost'] * self::TAX_RATE;
      $ret = ($data['rent'] * ($withouttax + $withtax - $data['free_rent'])) + $key_cost + $data['insurance_fee'];
      $monthly = self::calcMonthlyCost($data, false);
      $ret += $monthly;
      return $ret;
    }

    public static function calcMonthlyCost($data, $withParkings = true) {
      if (!\Euonymus\U::arrPrepared('rent', $data)
	  || !\Euonymus\U::arrPrepared('common_fee', $data)
	  || !\Euonymus\U::arrPrepared('parking', $data)
	  || !\Euonymus\U::arrPrepared('bicycle', $data)
	  ) {
	return false;
      }
      $semitotal = $data['rent'] + $data['common_fee'];
      return $withParkings ? $semitotal + $data['parking'] + $data['bicycle'] : $semitotal;
    }
}
