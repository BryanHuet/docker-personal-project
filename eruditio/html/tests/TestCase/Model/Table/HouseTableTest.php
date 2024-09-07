<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HouseTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HouseTable Test Case
 */
class HouseTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HouseTable
     */
    protected $House;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.House',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('House') ? [] : ['className' => HouseTable::class];
        $this->House = $this->getTableLocator()->get('House', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->House);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HouseTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
