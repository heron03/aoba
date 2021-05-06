<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LojascategoriaLoja[]|\Cake\Collection\CollectionInterface $lojascategoriaLojas
 */
?>
<div class="lojascategoriaLojas index content">
    <?= $this->Html->link(__('New Lojascategoria Loja'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lojascategoria Lojas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lojas_id') ?></th>
                    <th><?= $this->Paginator->sort('categorias_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lojascategoriaLojas as $lojascategoriaLoja): ?>
                <tr>
                    <td><?= $this->Number->format($lojascategoriaLoja->id) ?></td>
                    <td><?= $lojascategoriaLoja->has('loja') ? $this->Html->link($lojascategoriaLoja->loja->id_loja, ['controller' => 'Lojas', 'action' => 'view', $lojascategoriaLoja->loja->id_loja]) : '' ?></td>
                    <td><?= $lojascategoriaLoja->has('categorias_loja') ? $this->Html->link($lojascategoriaLoja->categorias_loja->id_categorias_lojas, ['controller' => 'CategoriasLojas', 'action' => 'view', $lojascategoriaLoja->categorias_loja->id_categorias_lojas]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lojascategoriaLoja->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lojascategoriaLoja->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lojascategoriaLoja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lojascategoriaLoja->id)]) ?>
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
