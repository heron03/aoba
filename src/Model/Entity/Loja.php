<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Loja Entity
 *
 * @property int $id_loja
 * @property string|null $nome
 * @property string|null $cnpj
 * @property int|null $endereco_id
 * @property string|null $site
 * @property string|null $email
 *
 * @property \App\Model\Entity\Endereco[] $enderecos
 * @property \App\Model\Entity\Produto[] $produtos
 * @property \App\Model\Entity\Telefone[] $telefones
 */
class Loja extends Entity
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
        'cnpj' => true,
        'endereco_id' => true,
        'site' => true,
        'email' => true,
        'enderecos' => true,
        'produtos' => true,
        'telefones' => true,
    ];
}
