<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuariosLoja $usuariosLoja
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuarios Loja'), ['action' => 'edit', $usuariosLoja->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuarios Loja'), ['action' => 'delete', $usuariosLoja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosLoja->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuarios Loja'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuariosLojas view content">
            <h3><?= h($usuariosLoja->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $usuariosLoja->has('usuario') ? $this->Html->link($usuariosLoja->usuario->id_usuarios, ['controller' => 'Usuarios', 'action' => 'view', $usuariosLoja->usuario->id_usuarios]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $usuariosLoja->has('produto') ? $this->Html->link($usuariosLoja->produto->id_produtos, ['controller' => 'Produtos', 'action' => 'view', $usuariosLoja->produto->id_produtos]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuariosLoja->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
