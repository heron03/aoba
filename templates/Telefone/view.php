<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Telefone'), ['action' => 'edit', $telefone->id_telefone], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Telefone'), ['action' => 'delete', $telefone->id_telefone], ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id_telefone), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Telefone'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Telefone'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="telefone view content">
            <h3><?= h($telefone->id_telefone) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($telefone->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loja') ?></th>
                    <td><?= $telefone->has('loja') ? $this->Html->link($telefone->loja->id_loja, ['controller' => 'Lojas', 'action' => 'view', $telefone->loja->id_loja]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $telefone->has('usuario') ? $this->Html->link($telefone->usuario->id_usuarios, ['controller' => 'Usuarios', 'action' => 'view', $telefone->usuario->id_usuarios]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Telefone') ?></th>
                    <td><?= $this->Number->format($telefone->id_telefone) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
