<?php
namespace App\Model\Table;

use App\Model\Entity\RentalProperty;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RentalProperties Model
 */
class RentalPropertiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('rental_properties');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('PropertyConditions', [
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('extent', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('extent')
            ->allowEmpty('arrangement')
            ->allowEmpty('address')
            ->allowEmpty('room')
            ->add('built', 'valid', ['rule' => 'date'])
            ->allowEmpty('built')
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
