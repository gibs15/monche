<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ong Entity
 *
 * @property int $id
 * @property string $name
 * @property int $phone
 * @property string $opens_at
 * @property string $closes_at
 * @property string|null $from_day
 * @property string|null $to_day
 * @property int $location_lat
 * @property int $location_long
 */
class Ong extends Entity
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
        'phone' => true,
        'opens_at' => true,
        'closes_at' => true,
        'from_day' => true,
        'to_day' => true,
        'location_lat' => true,
        'location_long' => true
    ];
}
