<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OngUsers Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Ongs
 * @property |\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\OngUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\OngUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OngUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OngUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OngUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OngUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OngUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OngUser findOrCreate($search, callable $callback = null, $options = [])
 */
class OngUsersTable extends Table
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

        $this->setTable('ong_users');
        $this->setDisplayField('ong');
        $this->setPrimaryKey(['ong', 'volunteer']);

        $this->belongsTo('Ongs', [
            'foreignKey' => 'ong_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['ong_id'], 'Ongs'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
