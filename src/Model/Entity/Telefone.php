<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Telefone Entity
 *
 * @property int $id_telefone
 * @property string|null $numero
 * @property int|null $loja_id
 * @property int|null $usuario_id
 *
 * @property \App\Model\Entity\Loja $loja
 * @property \App\Model\Entity\Usuario $usuario
 */
class Telefone extends Entity
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
        'numero' => true,
        'loja_id' => true,
        'usuario_id' => true,
        'loja' => true,
        'usuario' => true,
    ];
}
