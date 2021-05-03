<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id_produtos
 * @property string|null $nome
 * @property int|null $sub_categoria_id
 * @property float|null $valor
 * @property string|null $descricao
 * @property int|null $loja_id
 *
 * @property \App\Model\Entity\SubCategoriaProduto $sub_categoria_produto
 * @property \App\Model\Entity\Loja $loja
 */
class Produto extends Entity
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
        'sub_categoria_id' => true,
        'valor' => true,
        'descricao' => true,
        'loja_id' => true,
        'sub_categoria_produto' => true,
        'loja' => true,
    ];
}
