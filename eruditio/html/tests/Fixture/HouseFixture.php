<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HouseFixture
 */
class HouseFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'house';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'price' => 1,
                'photo' => 'Lorem ipsum dolor sit amet',
                'size' => 'Lorem ipsum dolor sit amet',
                'ground' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'link' => 'Lorem ipsum dolor sit amet',
                'create_date' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
