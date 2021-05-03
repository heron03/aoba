<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id_produtos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id_produtos], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_produtos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos view content">
            <h3><?= h($produto->id_produtos) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($produto->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub Categoria Produto') ?></th>
                    <td><?= $produto->has('sub_categoria_produto') ? $this->Html->link($produto->sub_categoria_produto->id_subcategoria_produto, ['controller' => 'SubCategoriaProduto', 'action' => 'view', $produto->sub_categoria_produto->id_subcategoria_produto]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Loja') ?></th>
                    <td><?= $produto->has('loja') ? $this->Html->link($produto->loja->id_loja, ['controller' => 'Lojas', 'action' => 'view', $produto->loja->id_loja]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Produtos') ?></th>
                    <td><?= $this->Number->format($produto->id_produtos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->format($produto->valor) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($produto->descricao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
