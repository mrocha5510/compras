<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requisition Model
 *
 * @method \App\Model\Entity\Requisition newEmptyEntity()
 * @method \App\Model\Entity\Requisition newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Requisition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Requisition get($primaryKey, $options = [])
 * @method \App\Model\Entity\Requisition findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Requisition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Requisition[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Requisition|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requisition saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requisition[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Requisition[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Requisition[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Requisition[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RequisitionTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('requisition');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('client')
            ->maxLength('client', 255)
            ->requirePresence('client', 'create')
            ->notEmptyString('client');

        $validator
            ->scalar('provider')
            ->maxLength('provider', 255)
            ->requirePresence('provider', 'create')
            ->notEmptyString('provider');

        $validator
            ->scalar('subTotal')
            ->maxLength('subTotal', 255)
            ->requirePresence('subTotal', 'create')
            ->notEmptyString('subTotal');

        $validator
            ->scalar('iva')
            ->maxLength('iva', 255)
            ->requirePresence('iva', 'create')
            ->notEmptyString('iva');

        $validator
            ->scalar('total')
            ->maxLength('total', 255)
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

        $validator
            ->date('deliveryDate')
            ->requirePresence('deliveryDate', 'create')
            ->notEmptyDate('deliveryDate');

        return $validator;
    }
}
