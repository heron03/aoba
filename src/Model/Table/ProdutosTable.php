<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProdutosTable extends Table
{

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

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['sub_categoria_id'], 'SubCategoriaProduto'), ['errorField' => 'sub_categoria_id']);
        $rules->add($rules->existsIn(['loja_id'], 'Lojas'), ['errorField' => 'loja_id']);

        return $rules;
    }
}
