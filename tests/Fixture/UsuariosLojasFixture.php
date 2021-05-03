<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosLojasFixture
 */
class UsuariosLojasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'usuarios_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'produtos_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'usuarios_id' => ['type' => 'index', 'columns' => ['usuarios_id'], 'length' => []],
            'produtos_id' => ['type' => 'index', 'columns' => ['produtos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'usuarios_lojas_ibfk_2' => ['type' => 'foreign', 'columns' => ['produtos_id'], 'references' => ['produtos', 'id_produtos'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'usuarios_lojas_ibfk_1' => ['type' => 'foreign', 'columns' => ['usuarios_id'], 'references' => ['usuarios', 'id_usuarios'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => 1,
                'usuarios_id' => 1,
                'produtos_id' => 1,
            ],
        ];
        parent::init();
    }
}
