<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubCategoriaProduto[]|\Cake\Collection\CollectionInterface $subCategoriaProduto
 */
?>
<div class="subCategoriaProduto index content">
    <?= $this->Html->link(__('New Sub Categoria Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sub Categoria Produto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_subcategoria_produto') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('categoria_produto_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subCategoriaProduto as $subCategoriaProduto): ?>
                <tr>
                    <td><?= $this->Number->format($subCategoriaProduto->id_subcategoria_produto) ?></td>
                    <td><?= h($subCategoriaProduto->nome) ?></td>
                    <td><?= $subCategoriaProduto->has('categorias_produto') ? $this->Html->link($subCategoriaProduto->categorias_produto->id_categorias_produtos, ['controller' => 'CategoriasProdutos', 'action' => 'view', $subCategoriaProduto->categorias_produto->id_categorias_produtos]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subCategoriaProduto->id_subcategoria_produto]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subCategoriaProduto->id_subcategoria_produto]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subCategoriaProduto->id_subcategoria_produto], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategoriaProduto->id_subcategoria_produto)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
