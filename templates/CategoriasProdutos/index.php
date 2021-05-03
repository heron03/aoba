<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto[]|\Cake\Collection\CollectionInterface $categoriasProdutos
 */
?>
<div class="categoriasProdutos index content">
    <?= $this->Html->link(__('New Categorias Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_categorias_produtos') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoriasProdutos as $categoriasProduto): ?>
                <tr>
                    <td><?= $this->Number->format($categoriasProduto->id_categorias_produtos) ?></td>
                    <td><?= h($categoriasProduto->nome) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoriasProduto->id_categorias_produtos]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriasProduto->id_categorias_produtos]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriasProduto->id_categorias_produtos], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasProduto->id_categorias_produtos)]) ?>
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
