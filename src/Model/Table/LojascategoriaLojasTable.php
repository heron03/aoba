<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LojascategoriaLojas Model
 *
 * @property \App\Model\Table\LojasTable&\Cake\ORM\Association\BelongsTo $Lojas
 * @property \App\Model\Table\CategoriasLojasTable&\Cake\ORM\Association\BelongsTo $CategoriasLojas
 *
 * @method \App\Model\Entity\LojascategoriaLoja newEmptyEntity()
 * @method \App\Model\Entity\LojascategoriaLoja newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja get($primaryKey, $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LojascategoriaLoja[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LojascategoriaLojasTable extends Table
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

        $this->setTable('lojascategoria_lojas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Lojas', [
            'foreignKey' => 'lojas_id',
        ]);
        $this->belongsTo('CategoriasLojas', [
            'foreignKey' => 'categorias_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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
        $rules->add($rules->existsIn(['lojas_id'], 'Lojas'), ['errorField' => 'lojas_id']);
        $rules->add($rules->existsIn(['categorias_id'], 'CategoriasLojas'), ['errorField' => 'categorias_id']);

        return $rules;
    }
}
