<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loja[]|\Cake\Collection\CollectionInterface $lojas
 */
?>
<div class="lojas index content">
    <?= $this->Html->link(__('New Loja'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lojas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_loja') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('cnpj') ?></th>
                    <th><?= $this->Paginator->sort('endereco_id') ?></th>
                    <th><?= $this->Paginator->sort('site') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lojas as $loja): ?>
                <tr>
                    <td><?= $this->Number->format($loja->id_loja) ?></td>
                    <td><?= h($loja->nome) ?></td>
                    <td><?= h($loja->cnpj) ?></td>
                    <td><?= $this->Number->format($loja->endereco_id) ?></td>
                    <td><?= h($loja->site) ?></td>
                    <td><?= h($loja->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $loja->id_loja]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $loja->id_loja]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $loja->id_loja], ['confirm' => __('Are you sure you want to delete # {0}?', $loja->id_loja)]) ?>
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
