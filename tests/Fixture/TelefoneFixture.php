<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TelefoneFixture
 */
class TelefoneFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'telefone';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_telefone' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'numero' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'loja_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'loja_id' => ['type' => 'index', 'columns' => ['loja_id'], 'length' => []],
            'usuario_id' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_telefone'], 'length' => []],
            'telefone_ibfk_2' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'id_usuarios'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'telefone_ibfk_1' => ['type' => 'foreign', 'columns' => ['loja_id'], 'references' => ['lojas', 'id_loja'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id_telefone' => 1,
                'numero' => 'Lorem ipsum dolor ',
                'loja_id' => 1,
                'usuario_id' => 1,
            ],
        ];
        parent::init();
    }
}
