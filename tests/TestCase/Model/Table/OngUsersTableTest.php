<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OngUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OngUsersTable Test Case
 */
class OngUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OngUsersTable
     */
    public $OngUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OngUsers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OngUsers') ? [] : ['className' => OngUsersTable::class];
        $this->OngUsers = TableRegistry::getTableLocator()->get('OngUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OngUsers);

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
