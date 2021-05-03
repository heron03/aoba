<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelefoneTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelefoneTable Test Case
 */
class TelefoneTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TelefoneTable
     */
    protected $Telefone;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Telefone',
        'app.Lojas',
        'app.Usuarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Telefone') ? [] : ['className' => TelefoneTable::class];
        $this->Telefone = $this->getTableLocator()->get('Telefone', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Telefone);

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
