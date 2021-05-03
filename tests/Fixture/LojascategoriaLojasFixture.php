<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LojascategoriaLojasFixture
 */
class LojascategoriaLojasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'lojas_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categorias_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'lojas_id' => ['type' => 'index', 'columns' => ['lojas_id'], 'length' => []],
            'categorias_id' => ['type' => 'index', 'columns' => ['categorias_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'lojascategoria_lojas_ibfk_2' => ['type' => 'foreign', 'columns' => ['categorias_id'], 'references' => ['categorias_lojas', 'id_categorias_lojas'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'lojascategoria_lojas_ibfk_1' => ['type' => 'foreign', 'columns' => ['lojas_id'], 'references' => ['lojas', 'id_loja'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'lojas_id' => 1,
                'categorias_id' => 1,
            ],
        ];
        parent::init();
    }
}
