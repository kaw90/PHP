<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comprador Model
 *
 * @method \App\Model\Entity\Comprador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comprador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Comprador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comprador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comprador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comprador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comprador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comprador findOrCreate($search, callable $callback = null, $options = [])
 */
class CompradorTable extends Table
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

        $this->setTable('comprador');
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
            ->scalar('Endereço')
            ->maxLength('Endereço', 255)
            ->requirePresence('Endereço', 'create')
            ->notEmptyString('Endereço');

        $validator
            ->scalar('Fone')
            ->maxLength('Fone', 255)
            ->requirePresence('Fone', 'create')
            ->notEmptyString('Fone');

        $validator
            ->scalar('E-mail')
            ->maxLength('E-mail', 255)
            ->requirePresence('E-mail', 'create')
            ->notEmptyString('E-mail');

        $validator
            ->integer('Cpf')
            ->requirePresence('Cpf', 'create')
            ->notEmptyString('Cpf');

        return $validator;
    }
}
