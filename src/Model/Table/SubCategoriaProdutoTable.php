<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubCategoriaProduto Model
 *
 * @property \App\Model\Table\CategoriasProdutosTable&\Cake\ORM\Association\BelongsTo $CategoriasProdutos
 *
 * @method \App\Model\Entity\SubCategoriaProduto newEmptyEntity()
 * @method \App\Model\Entity\SubCategoriaProduto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SubCategoriaProduto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SubCategoriaProdutoTable extends Table
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

        $this->setTable('sub_categoria_produto');
        $this->setDisplayField('id_subcategoria_produto');
        $this->setPrimaryKey('id_subcategoria_produto');

        $this->belongsTo('CategoriasProdutos', [
            'foreignKey' => 'categoria_produto_id',
        ]);
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
            ->integer('id_subcategoria_produto')
            ->allowEmptyString('id_subcategoria_produto', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['categoria_produto_id'], 'CategoriasProdutos'), ['errorField' => 'categoria_produto_id']);

        return $rules;
    }
}
