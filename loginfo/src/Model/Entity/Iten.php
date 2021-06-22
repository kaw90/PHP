<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Iten Entity
 *
 * @property int $id
 * @property string $Nome do Iten
 * @property int $Unidade de Medida
 * @property int $Quantidade
 * @property int $Preço
 * @property string $Tipo
 * @property \Cake\I18n\FrozenDate $Data de Validade
 * @property \Cake\I18n\FrozenDate $Data de Fabricação
 */
class Iten extends Entity
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
        'Nome do Iten' => true,
        'Unidade de Medida' => true,
        'Quantidade' => true,
        'Preço' => true,
        'Tipo' => true,
        'Data de Validade' => true,
        'Data de Fabricação' => true,
    ];
}
