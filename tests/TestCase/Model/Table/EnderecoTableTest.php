<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnderecoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnderecoTable Test Case
 */
class EnderecoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnderecoTable
     */
    protected $Endereco;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Endereco',
        'app.Lojas',
        'app.Usuarios',
        'app.Estado',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Endereco') ? [] : ['className' => EnderecoTable::class];
        $this->Endereco = $this->getTableLocator()->get('Endereco', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Endereco);

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
