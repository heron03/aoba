<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariosLojasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariosLojasTable Test Case
 */
class UsuariosLojasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariosLojasTable
     */
    protected $UsuariosLojas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UsuariosLojas',
        'app.Usuarios',
        'app.Produtos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UsuariosLojas') ? [] : ['className' => UsuariosLojasTable::class];
        $this->UsuariosLojas = $this->getTableLocator()->get('UsuariosLojas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UsuariosLojas);

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
