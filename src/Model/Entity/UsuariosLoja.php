<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsuariosLoja Entity
 *
 * @property int $id
 * @property int|null $usuarios_id
 * @property int|null $produtos_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Produto $produto
 */
class UsuariosLoja extends Entity
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
        'usuarios_id' => true,
        'produtos_id' => true,
        'usuario' => true,
        'produto' => true,
    ];
}
