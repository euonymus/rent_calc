<?php
namespace App\Model\Table;

use App\Model\Entity\PropertyCondition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PropertyConditions Model
 */
class PropertyConditionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('property_conditions');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('RentalProperties', [
            'foreignKey' => 'rental_property_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create')
            ->add('rent', 'valid', ['rule' => 'numeric'])
            ->requirePresence('rent', 'create')
            ->notEmpty('rent')
            ->add('common_fee', 'valid', ['rule' => 'numeric'])
            ->requirePresence('common_fee', 'create')
            ->allowEmpty('common_fee')
            ->add('parking', 'valid', ['rule' => 'numeric'])
            ->requirePresence('parking', 'create')
            ->allowEmpty('parking')
            ->add('bicycle', 'valid', ['rule' => 'numeric'])
            ->requirePresence('bicycle', 'create')
            ->allowEmpty('bicycle')
            ->add('annual_guarantee_charge', 'valid', ['rule' => 'numeric'])
            ->requirePresence('annual_guarantee_charge', 'create')
            ->allowEmpty('annual_guarantee_charge')
            ->add('renewal_fee', 'valid', ['rule' => 'numeric'])
            ->requirePresence('renewal_fee', 'create')
            ->allowEmpty('renewal_fee')
            ->add('renewal_extra_fee', 'valid', ['rule' => 'numeric'])
            ->requirePresence('renewal_extra_fee', 'create')
            ->allowEmpty('renewal_extra_fee')
            ->add('insurance_fee', 'valid', ['rule' => 'numeric'])
            ->requirePresence('insurance_fee', 'create')
            ->allowEmpty('insurance_fee')
            ->add('deposit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('deposit', 'create')
            ->allowEmpty('deposit')
            ->add('thanx_fee', 'valid', ['rule' => 'numeric'])
            ->requirePresence('thanx_fee', 'create')
            ->allowEmpty('thanx_fee')
            ->add('initial_guarantee_charge', 'valid', ['rule' => 'numeric'])
            ->requirePresence('initial_guarantee_charge', 'create')
            ->allowEmpty('initial_guarantee_charge')
            ->add('broker_commission', 'valid', ['rule' => 'numeric'])
            ->requirePresence('broker_commission', 'create')
            ->allowEmpty('broker_commission')
            ->add('key_replacement_cost', 'valid', ['rule' => 'numeric'])
            ->requirePresence('key_replacement_cost', 'create')
            ->allowEmpty('key_replacement_cost')
            ->add('free_rent', 'valid', ['rule' => 'numeric'])
            ->requirePresence('free_rent', 'create')
            ->allowEmpty('free_rent')
            ->allowEmpty('remarks')
            ->add('on_sale', 'valid', ['rule' => 'boolean'])
            ->requirePresence('on_sale', 'create')
            ->notEmpty('on_sale')
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['rental_property_id'], 'RentalProperties'));
        return $rules;
    }
}
