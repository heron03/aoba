<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasLoja[]|\Cake\Collection\CollectionInterface $categoriasLojas
 */
?>
<div class="categoriasLojas index content">
    <?= $this->Html->link(__('New Categorias Loja'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias Lojas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_categorias_lojas') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoriasLojas as $categoriasLoja): ?>
                <tr>
                    <td><?= $this->Number->format($categoriasLoja->id_categorias_lojas) ?></td>
                    <td><?= h($categoriasLoja->nome) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoriasLoja->id_categorias_lojas]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriasLoja->id_categorias_lojas]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriasLoja->id_categorias_lojas], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasLoja->id_categorias_lojas)]) ?>
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
