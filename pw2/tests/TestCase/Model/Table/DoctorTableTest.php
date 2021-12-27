<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoctorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoctorTable Test Case
 */
class DoctorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DoctorTable
     */
    public $Doctor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Doctor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Doctor') ? [] : ['className' => DoctorTable::class];
        $this->Doctor = TableRegistry::getTableLocator()->get('Doctor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Doctor);

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
