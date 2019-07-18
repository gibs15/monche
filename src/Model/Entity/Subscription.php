<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subscription Entity
 *
 * @property int $id
 * @property int $event
 * @property int $user_id
 * @property int $meals_needed
 * @property int $ong_delivery
 * @property \Cake\I18n\FrozenTime $delivery_date_time
 */
class Subscription extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'event' => true,
        'user_id' => true,
        'meals_needed' => true,
        'ong_delivery' => true,
        'delivery_date_time' => true
    ];
}
