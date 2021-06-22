<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendas Model
 *
 * @method \App\Model\Entity\Venda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Venda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venda findOrCreate($search, callable $callback = null, $options = [])
 */
class VendasTable extends Table
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

        $this->setTable('vendas');
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
            ->scalar('Nome do Iten')
            ->maxLength('Nome do Iten', 50)
            ->requirePresence('Nome do Iten', 'create')
            ->notEmptyString('Nome do Iten');

        $validator
            ->integer('Quantidade')
            ->requirePresence('Quantidade', 'create')
            ->notEmptyString('Quantidade');

        $validator
            ->scalar('Vendedor')
            ->maxLength('Vendedor', 255)
            ->requirePresence('Vendedor', 'create')
            ->notEmptyString('Vendedor');

        $validator
            ->date('Data da Venda')
            ->requirePresence('Data da Venda', 'create')
            ->notEmptyDate('Data da Venda');

        return $validator;
    }
}
