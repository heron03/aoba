<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \App\Model\Table\ArosTable&\Cake\ORM\Association\BelongsTo $Aros
 * @property \App\Model\Table\EnderecoTable&\Cake\ORM\Association\HasMany $Endereco
 * @property \App\Model\Table\TelefoneTable&\Cake\ORM\Association\HasMany $Telefone
 * @property \App\Model\Table\LojasTable&\Cake\ORM\Association\BelongsToMany $Lojas
 *
 * @method \App\Model\Entity\Usuario newEmptyEntity()
 * @method \App\Model\Entity\Usuario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsuariosTable extends Table
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

        $this->setTable('usuarios');
        $this->setDisplayField('id_usuarios');
        $this->setPrimaryKey('id_usuarios');

        $this->belongsTo('Aros', [
            'foreignKey' => 'aro_id',
        ]);
        $this->hasMany('Endereco', [
            'foreignKey' => 'usuario_id',
        ]);
        $this->hasMany('Telefone', [
            'foreignKey' => 'usuario_id',
        ]);
        $this->belongsToMany('Lojas', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'loja_id',
            'joinTable' => 'usuarios_lojas',
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
            ->integer('id_usuarios')
            ->allowEmptyString('id_usuarios', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('senha')
            ->maxLength('senha', 255)
            ->allowEmptyString('senha');

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
        $rules->add($rules->existsIn(['aro_id'], 'Aros'), ['errorField' => 'aro_id']);

        return $rules;
    }
}
