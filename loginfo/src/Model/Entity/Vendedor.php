<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vendedor Entity
 *
 * @property int $id
 * @property string $Nome
 * @property string $Matricula
 * @property string $Email
 */
class Vendedor extends Entity
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
        'Nome' => true,
        'Matricula' => true,
        'Email' => true,
    ];
}
