<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doctor Entity
 *
 * @property int $id
 * @property string $nombre
 * @property int $edad
 * @property float $sueldo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Doctor extends Entity
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
        'nombre' => true,
        'edad' => true,
        'sueldo' => true,
        'created' => true,
        'modified' => true,
    ];
}
