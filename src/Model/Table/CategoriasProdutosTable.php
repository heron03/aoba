<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriasProdutos Model
 *
 * @method \App\Model\Entity\CategoriasProduto newEmptyEntity()
 * @method \App\Model\Entity\CategoriasProduto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriasProduto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CategoriasProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProduto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasProduto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasProduto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasProduto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasProduto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CategoriasProdutosTable extends Table
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

        $this->setTable('categorias_produtos');
        $this->setDisplayField('id_categorias_produtos');
        $this->setPrimaryKey('id_categorias_produtos');
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
            ->integer('id_categorias_produtos')
            ->allowEmptyString('id_categorias_produtos', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        return $validator;
    }
}
