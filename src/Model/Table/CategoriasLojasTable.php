<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriasLojas Model
 *
 * @method \App\Model\Entity\CategoriasLoja newEmptyEntity()
 * @method \App\Model\Entity\CategoriasLoja newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasLoja[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasLoja get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriasLoja findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CategoriasLoja patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasLoja[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasLoja|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasLoja saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasLoja[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasLoja[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasLoja[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasLoja[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CategoriasLojasTable extends Table
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

        $this->setTable('categorias_lojas');
        $this->setDisplayField('id_categorias_lojas');
        $this->setPrimaryKey('id_categorias_lojas');
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
            ->integer('id_categorias_lojas')
            ->allowEmptyString('id_categorias_lojas', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        return $validator;
    }
}
