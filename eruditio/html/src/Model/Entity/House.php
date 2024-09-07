<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * House Entity
 *
 * @property int $id
 * @property string $title
 * @property int $price
 * @property string $photo
 * @property string $size
 * @property string $ground
 * @property string $address
 * @property string $link
 * @property string $create_date
 */
class House extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'title' => true,
        'price' => true,
        'photo' => true,
        'size' => true,
        'ground' => true,
        'address' => true,
        'link' => true,
        'create_date' => true,
    ];
}
