<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelefonesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelefonesTable Test Case
 */
class TelefonesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TelefonesTable
     */
    protected $Telefones;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Telefones',
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
        $config = $this->getTableLocator()->exists('Telefones') ? [] : ['className' => TelefonesTable::class];
        $this->Telefones = $this->getTableLocator()->get('Telefones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Telefones);

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
