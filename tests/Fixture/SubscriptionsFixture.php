<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubscriptionsFixture
 */
class SubscriptionsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'event' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'meals_needed' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ong_delivery' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'delivery_date_time' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_event_s' => ['type' => 'index', 'columns' => ['event'], 'length' => []],
            'fk_volunteer_s' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_ong_delivery_s' => ['type' => 'index', 'columns' => ['ong_delivery'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_event_s' => ['type' => 'foreign', 'columns' => ['event'], 'references' => ['events', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_ong_delivery_s' => ['type' => 'foreign', 'columns' => ['ong_delivery'], 'references' => ['ongs', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_volunteer_s' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'event' => 1,
                'user_id' => 1,
                'meals_needed' => 1,
                'ong_delivery' => 1,
                'delivery_date_time' => '2019-07-18 04:38:06'
            ],
        ];
        parent::init();
    }
}
