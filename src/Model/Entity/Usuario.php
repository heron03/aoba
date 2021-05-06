<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id_usuarios
 * @property string|null $nome
 * @property string|null $email
 * @property string|null $senha
 *
 * @property \App\Model\Entity\Endereco[] $enderecos
 * @property \App\Model\Entity\Telefone[] $telefones
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
        'nome' => true,
        'email' => true,
        'senha' => true,
        'enderecos' => true,
        'telefones' => true,
    ];
}
