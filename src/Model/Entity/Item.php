<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int|null $product_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $price
 * @property string|null $image_path
 *
 * @property \App\Model\Entity\Product $product
 */
class Item extends Entity
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
    protected $_accessible = [
        'product_id' => true,
        'name' => true,
        'description' => true,
        'price' => true,
        'image_path' => true,
        'product' => true,
    ];
}
