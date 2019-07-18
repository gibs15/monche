<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OngsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OngsTable Test Case
 */
class OngsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OngsTable
     */
    public $Ongs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ongs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ongs') ? [] : ['className' => OngsTable::class];
        $this->Ongs = TableRegistry::getTableLocator()->get('Ongs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ongs);

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
