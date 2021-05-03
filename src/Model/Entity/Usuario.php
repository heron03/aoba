<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id_usuarios
 * @property int|null $aro_id
 * @property string|null $nome
 * @property string|null $email
 * @property string|null $senha
 *
 * @property \App\Model\Entity\Aro $aro
 * @property \App\Model\Entity\Endereco[] $endereco
 * @property \App\Model\Entity\Telefone[] $telefone
 * @property \App\Model\Entity\Loja[] $lojas
 */
class Usuario extends Entity
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
        'aro_id' => true,
        'nome' => true,
        'email' => true,
        'senha' => true,
        'aro' => true,
        'endereco' => true,
        'telefone' => true,
        'lojas' => true,
    ];
}
