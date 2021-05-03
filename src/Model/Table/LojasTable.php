<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lojas Model
 *
 * @property \App\Model\Table\EnderecoTable&\Cake\ORM\Association\BelongsTo $Endereco
 * @property \App\Model\Table\EnderecoTable&\Cake\ORM\Association\HasMany $Endereco
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 * @property \App\Model\Table\TelefoneTable&\Cake\ORM\Association\HasMany $Telefone
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsToMany $Usuarios
 *
 * @method \App\Model\Entity\Loja newEmptyEntity()
 * @method \App\Model\Entity\Loja newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Loja[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Loja get($primaryKey, $options = [])
 * @method \App\Model\Entity\Loja findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Loja patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Loja[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Loja|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Loja saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Loja[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Loja[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Loja[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Loja[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LojasTable extends Table
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

        $this->setTable('lojas');
        $this->setDisplayField('id_loja');
        $this->setPrimaryKey('id_loja');

        $this->belongsTo('Endereco', [
            'foreignKey' => 'endereco_id',
        ]);
        $this->hasMany('Endereco', [
            'foreignKey' => 'loja_id',
        ]);
        $this->hasMany('Produtos', [
            'foreignKey' => 'loja_id',
        ]);
        $this->hasMany('Telefone', [
            'foreignKey' => 'loja_id',
        ]);
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'loja_id',
            'targetForeignKey' => 'usuario_id',
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
            ->integer('id_loja')
            ->allowEmptyString('id_loja', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        $validator
            ->scalar('cnpj')
            ->maxLength('cnpj', 20)
            ->allowEmptyString('cnpj');

        $validator
            ->scalar('site')
            ->maxLength('site', 255)
            ->allowEmptyString('site');

        $validator
            ->email('email')
            ->allowEmptyString('email');

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
        $rules->add($rules->existsIn(['endereco_id'], 'Endereco'), ['errorField' => 'endereco_id']);

        return $rules;
    }
}
