<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompradorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompradorTable Test Case
 */
class CompradorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompradorTable
     */
    public $Comprador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Comprador',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Comprador') ? [] : ['className' => CompradorTable::class];
        $this->Comprador = TableRegistry::getTableLocator()->get('Comprador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Comprador);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
