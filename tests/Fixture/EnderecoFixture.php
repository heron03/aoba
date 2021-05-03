<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnderecoFixture
 */
class EnderecoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'endereco';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_endereco' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'lougradouro' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cep' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'numero' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cidade' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'bairro' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'loja_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado_id' => ['type' => 'char', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'loja_id' => ['type' => 'index', 'columns' => ['loja_id'], 'length' => []],
            'usuario_id' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'estado_id' => ['type' => 'index', 'columns' => ['estado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_endereco'], 'length' => []],
            'endereco_ibfk_3' => ['type' => 'foreign', 'columns' => ['estado_id'], 'references' => ['estado', 'id_estado'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'endereco_ibfk_2' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'id_usuarios'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'endereco_ibfk_1' => ['type' => 'foreign', 'columns' => ['loja_id'], 'references' => ['lojas', 'id_loja'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_endereco' => 1,
                'lougradouro' => 'Lorem ipsum dolor sit amet',
                'cep' => 'Lorem ipsum dolor ',
                'numero' => 'Lorem ip',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'loja_id' => 1,
                'usuario_id' => 1,
                'estado_id' => '',
            ],
        ];
        parent::init();
    }
}
