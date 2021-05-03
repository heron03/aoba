<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubCategoriaProduto $subCategoriaProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sub Categoria Produto'), ['action' => 'edit', $subCategoriaProduto->id_subcategoria_produto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sub Categoria Produto'), ['action' => 'delete', $subCategoriaProduto->id_subcategoria_produto], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategoriaProduto->id_subcategoria_produto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sub Categoria Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sub Categoria Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subCategoriaProduto view content">
            <h3><?= h($subCategoriaProduto->id_subcategoria_produto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($subCategoriaProduto->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categorias Produto') ?></th>
                    <td><?= $subCategoriaProduto->has('categorias_produto') ? $this->Html->link($subCategoriaProduto->categorias_produto->id_categorias_produtos, ['controller' => 'CategoriasProdutos', 'action' => 'view', $subCategoriaProduto->categorias_produto->id_categorias_produtos]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Subcategoria Produto') ?></th>
                    <td><?= $this->Number->format($subCategoriaProduto->id_subcategoria_produto) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
