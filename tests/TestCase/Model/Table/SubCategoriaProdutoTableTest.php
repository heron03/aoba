<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubCategoriaProdutoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubCategoriaProdutoTable Test Case
 */
class SubCategoriaProdutoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubCategoriaProdutoTable
     */
    protected $SubCategoriaProduto;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SubCategoriaProduto',
        'app.CategoriasProdutos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SubCategoriaProduto') ? [] : ['className' => SubCategoriaProdutoTable::class];
        $this->SubCategoriaProduto = $this->getTableLocator()->get('SubCategoriaProduto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SubCategoriaProduto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
