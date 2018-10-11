<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Industry Model
 *
 * @property \App\Model\Table\BusinessesTable|\Cake\ORM\Association\BelongsTo $Businesses
 *
 * @method \App\Model\Entity\Industry get($primaryKey, $options = [])
 * @method \App\Model\Entity\Industry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Industry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Industry|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Industry|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Industry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Industry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Industry findOrCreate($search, callable $callback = null, $options = [])
 */
class IndustryTable extends Table
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

        $this->setTable('industry');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('BusinessUnit', [
            'foreignKey' => 'bu_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('id', 'create');

           $validator
            ->scalar('bu_id')
            ->maxLength('bu_id', 50)
            ->requirePresence('bu_id', 'create')
            ->notEmpty('bu_id');


        $validator
            ->scalar('industry_name')
            ->maxLength('industry_name', 50)
            ->requirePresence('industry_name', 'create')
            ->notEmpty('industry_name');

        $validator
            ->integer('status')
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
   
}
