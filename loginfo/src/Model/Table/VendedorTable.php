<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendedor Model
 *
 * @method \App\Model\Entity\Vendedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vendedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor findOrCreate($search, callable $callback = null, $options = [])
 */
class VendedorTable extends Table
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

        $this->setTable('vendedor');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('Nome')
            ->maxLength('Nome', 255)
            ->requirePresence('Nome', 'create')
            ->notEmptyString('Nome');

        $validator
            ->scalar('Matricula')
            ->maxLength('Matricula', 255)
            ->requirePresence('Matricula', 'create')
            ->notEmptyString('Matricula');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 255)
            ->requirePresence('Email', 'create')
            ->notEmptyString('Email');

        return $validator;
    }
}
