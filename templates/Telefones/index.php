<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone[]|\Cake\Collection\CollectionInterface $telefones
 */
?>
<div class="telefones index content">
    <?= $this->Html->link(__('New Telefone'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Telefones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_telefone') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('loja_id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($telefones as $telefone): ?>
                <tr>
                    <td><?= $this->Number->format($telefone->id_telefone) ?></td>
                    <td><?= h($telefone->numero) ?></td>
                    <td><?= $telefone->has('loja') ? $this->Html->link($telefone->loja->id_loja, ['controller' => 'Lojas', 'action' => 'view', $telefone->loja->id_loja]) : '' ?></td>
                    <td><?= $telefone->has('usuario') ? $this->Html->link($telefone->usuario->id_usuarios, ['controller' => 'Usuarios', 'action' => 'view', $telefone->usuario->id_usuarios]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $telefone->id_telefone]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telefone->id_telefone]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telefone->id_telefone], ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id_telefone)]) ?>
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
