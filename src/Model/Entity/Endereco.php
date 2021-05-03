<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id_endereco
 * @property string|null $lougradouro
 * @property string|null $cep
 * @property string|null $numero
 * @property string|null $cidade
 * @property string|null $bairro
 * @property int|null $loja_id
 * @property int|null $usuario_id
 * @property string|null $estado_id
 *
 * @property \App\Model\Entity\Loja[] $lojas
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Estado $estado
 */
class Endereco extends Entity
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
        'lougradouro' => true,
        'cep' => true,
        'numero' => true,
        'cidade' => true,
        'bairro' => true,
        'loja_id' => true,
        'usuario_id' => true,
        'estado_id' => true,
        'lojas' => true,
        'usuario' => true,
        'estado' => true,
    ];
}
