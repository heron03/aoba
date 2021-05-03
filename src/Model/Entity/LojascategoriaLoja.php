<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LojascategoriaLoja Entity
 *
 * @property int $id
 * @property int|null $lojas_id
 * @property int|null $categorias_id
 *
 * @property \App\Model\Entity\Loja $loja
 * @property \App\Model\Entity\CategoriasLoja $categorias_loja
 */
class LojascategoriaLoja extends Entity
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
        'lojas_id' => true,
        'categorias_id' => true,
        'loja' => true,
        'categorias_loja' => true,
    ];
}
