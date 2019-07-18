<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ongs Model
 *
 * @property |\Cake\ORM\Association\HasMany $OngUsers
 *
 * @method \App\Model\Entity\Ong get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ong newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ong[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ong|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ong saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ong patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ong[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ong findOrCreate($search, callable $callback = null, $options = [])
 */
class OngsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ongs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('OngUsers', [
            'foreignKey' => 'ong_id'
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->integer('phone')
            ->requirePresence('phone', 'create')
            ->allowEmptyString('phone', false);

        $validator
            ->scalar('opens_at')
            ->maxLength('opens_at', 7)
            ->requirePresence('opens_at', 'create')
            ->allowEmptyString('opens_at', false);

        $validator
            ->scalar('closes_at')
            ->maxLength('closes_at', 7)
            ->requirePresence('closes_at', 'create')
            ->allowEmptyString('closes_at', false);

        $validator
            ->scalar('from_day')
            ->allowEmptyString('from_day');

        $validator
            ->scalar('to_day')
            ->allowEmptyString('to_day');

        $validator
            ->integer('location_lat')
            ->requirePresence('location_lat', 'create')
            ->allowEmptyString('location_lat', false);

        $validator
            ->integer('location_long')
            ->requirePresence('location_long', 'create')
            ->allowEmptyString('location_long', false);

        return $validator;
    }
}
