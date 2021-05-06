<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categorias Produto'), ['action' => 'edit', $categoriasProduto->id_categorias_produtos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categorias Produto'), ['action' => 'delete', $categoriasProduto->id_categorias_produtos], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasProduto->id_categorias_produtos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categorias Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasProdutos view content">
            <h3><?= h($categoriasProduto->id_categorias_produtos) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($categoriasProduto->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categorias Produtos') ?></th>
                    <td><?= $this->Number->format($categoriasProduto->id_categorias_produtos) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
