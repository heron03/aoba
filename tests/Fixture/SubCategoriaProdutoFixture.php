<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubCategoriaProdutoFixture
 */
class SubCategoriaProdutoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sub_categoria_produto';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_subcategoria_produto' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'categoria_produto_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'categoria_produto_id' => ['type' => 'index', 'columns' => ['categoria_produto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_subcategoria_produto'], 'length' => []],
            'sub_categoria_produto_ibfk_1' => ['type' => 'foreign', 'columns' => ['categoria_produto_id'], 'references' => ['categorias_produtos', 'id_categorias_produtos'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id_subcategoria_produto' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'categoria_produto_id' => 1,
            ],
        ];
        parent::init();
    }
}
