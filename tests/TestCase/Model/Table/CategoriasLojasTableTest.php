<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasLojasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasLojasTable Test Case
 */
class CategoriasLojasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasLojasTable
     */
    protected $CategoriasLojas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('CategoriasLojas') ? [] : ['className' => CategoriasLojasTable::class];
        $this->CategoriasLojas = $this->getTableLocator()->get('CategoriasLojas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CategoriasLojas);

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
}
