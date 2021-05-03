<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LojascategoriaLojasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LojascategoriaLojasTable Test Case
 */
class LojascategoriaLojasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LojascategoriaLojasTable
     */
    protected $LojascategoriaLojas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LojascategoriaLojas',
        'app.Lojas',
        'app.CategoriasLojas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LojascategoriaLojas') ? [] : ['className' => LojascategoriaLojasTable::class];
        $this->LojascategoriaLojas = $this->getTableLocator()->get('LojascategoriaLojas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LojascategoriaLojas);

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
