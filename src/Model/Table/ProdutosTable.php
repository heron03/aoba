<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @property \App\Model\Table\SubCategoriaProdutoTable&\Cake\ORM\Association\BelongsTo $SubCategoriaProduto
 * @property \App\Model\Table\LojasTable&\Cake\ORM\Association\BelongsTo $Lojas
 *
 * @method \App\Model\Entity\Produto newEmptyEntity()
 * @method \App\Model\Entity\Produto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProdutosTable extends Table
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

        $this->setTable('produtos');
        $this->setDisplayField('id_produtos');
        $this->setPrimaryKey('id_produtos');

        $this->belongsTo('SubCategoriaProduto', [
            'foreignKey' => 'sub_categoria_id',
        ]);
        $this->belongsTo('Lojas', [
            'foreignKey' => 'loja_id',
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
            ->integer('id_produtos')
            ->allowEmptyString('id_produtos', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        $validator
            ->numeric('valor')
            ->allowEmptyString('valor');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

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
        $rules->add($rules->existsIn(['sub_categoria_id'], 'SubCategoriaProduto'), ['errorField' => 'sub_categoria_id']);
        $rules->add($rules->existsIn(['loja_id'], 'Lojas'), ['errorField' => 'loja_id']);

        return $rules;
    }
}
