<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $food_type
 * @property int $n_meals
 * @property int $location_lat
 * @property int $location_long
 * @property \Cake\I18n\FrozenTime $datetime
 * @property int $user_id
 * @property string|null $status
 *
 * @property \App\Model\Entity\User $user
 */
class Event extends Entity
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
        'name' => true,
        'food_type' => true,
        'n_meals' => true,
        'location_lat' => true,
        'location_long' => true,
        'datetime' => true,
        'user_id' => true,
        'status' => true,
        'user' => true
    ];
}
