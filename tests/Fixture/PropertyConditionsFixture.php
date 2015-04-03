<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PropertyConditionsFixture
 *
 */
class PropertyConditionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'rental_property_id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'rent' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '賃料', 'precision' => null, 'autoIncrement' => null],
        'common_fee' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '共益費', 'precision' => null, 'autoIncrement' => null],
        'parking' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '駐車場料金', 'precision' => null, 'autoIncrement' => null],
        'bicycle' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '駐輪場料金', 'precision' => null, 'autoIncrement' => null],
        'annual_guarantee_charge' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '年間保証料'],
        'renewal_fee' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '更新料'],
        'renewal_extra_fee' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '更新事務手数料'],
        'insurance_fee' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '火災保険料', 'precision' => null, 'autoIncrement' => null],
        'deposit' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '敷金'],
        'thanx_fee' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '礼金'],
        'initial_guarantee_charge' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '保証料'],
        'broker_commission' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '仲介手数料'],
        'key_replacement_cost' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '鍵交換料', 'precision' => null, 'autoIncrement' => null],
        'free_rent' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => 'フリーレント'],
        'remarks' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'on_sale' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'status' => ['type' => 'integer', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'updated' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'rental_property_key' => ['type' => 'index', 'columns' => ['rental_property_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'property_conditions_ibfk_1' => ['type' => 'foreign', 'columns' => ['rental_property_id'], 'references' => ['rental_properties', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 'b773ace4-b1a3-419c-8655-07f90a3c9a10',
            'rental_property_id' => 'Lorem ipsum dolor sit amet',
            'rent' => 1,
            'common_fee' => 1,
            'parking' => 1,
            'bicycle' => 1,
            'annual_guarantee_charge' => 1,
            'renewal_fee' => 1,
            'renewal_extra_fee' => 1,
            'insurance_fee' => 1,
            'deposit' => 1,
            'thanx_fee' => 1,
            'initial_guarantee_charge' => 1,
            'broker_commission' => 1,
            'key_replacement_cost' => 1,
            'free_rent' => 1,
            'remarks' => 'Lorem ipsum dolor sit amet',
            'on_sale' => 1,
            'status' => 1,
            'created' => '2015-04-03 07:29:51',
            'updated' => '2015-04-03 07:29:51'
        ],
    ];
}
