<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuariosLoja[]|\Cake\Collection\CollectionInterface $usuariosLojas
 */
?>
<div class="usuariosLojas index content">
    <?= $this->Html->link(__('New Usuarios Loja'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios Lojas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('usuarios_id') ?></th>
                    <th><?= $this->Paginator->sort('produtos_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuariosLojas as $usuariosLoja): ?>
                <tr>
                    <td><?= $this->Number->format($usuariosLoja->id) ?></td>
                    <td><?= $usuariosLoja->has('usuario') ? $this->Html->link($usuariosLoja->usuario->id_usuarios, ['controller' => 'Usuarios', 'action' => 'view', $usuariosLoja->usuario->id_usuarios]) : '' ?></td>
                    <td><?= $usuariosLoja->has('produto') ? $this->Html->link($usuariosLoja->produto->id_produtos, ['controller' => 'Produtos', 'action' => 'view', $usuariosLoja->produto->id_produtos]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuariosLoja->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuariosLoja->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuariosLoja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosLoja->id)]) ?>
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
