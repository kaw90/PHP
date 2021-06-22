<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itens Model
 *
 * @method \App\Model\Entity\Iten get($primaryKey, $options = [])
 * @method \App\Model\Entity\Iten newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Iten[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Iten|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Iten saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Iten patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Iten[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Iten findOrCreate($search, callable $callback = null, $options = [])
 */
class ItensTable extends Table
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

        $this->setTable('itens');
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
            ->integer('Unidade de Medida')
            ->requirePresence('Unidade de Medida', 'create')
            ->notEmptyString('Unidade de Medida');

        $validator
            ->integer('Quantidade')
            ->requirePresence('Quantidade', 'create')
            ->notEmptyString('Quantidade');

        $validator
            ->integer('Preço')
            ->requirePresence('Preço', 'create')
            ->notEmptyString('Preço');

        $validator
            ->scalar('Tipo')
            ->maxLength('Tipo', 255)
            ->requirePresence('Tipo', 'create')
            ->notEmptyString('Tipo');

        $validator
            ->date('Data de Validade')
            ->requirePresence('Data de Validade', 'create')
            ->notEmptyDate('Data de Validade');

        $validator
            ->date('Data de Fabricação')
            ->requirePresence('Data de Fabricação', 'create')
            ->notEmptyDate('Data de Fabricação');

        return $validator;
    }
}
