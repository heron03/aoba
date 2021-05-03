<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LojascategoriaLoja $lojascategoriaLoja
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lojascategoria Loja'), ['action' => 'edit', $lojascategoriaLoja->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lojascategoria Loja'), ['action' => 'delete', $lojascategoriaLoja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lojascategoriaLoja->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lojascategoria Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lojascategoria Loja'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lojascategoriaLojas view content">
            <h3><?= h($lojascategoriaLoja->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Loja') ?></th>
                    <td><?= $lojascategoriaLoja->has('loja') ? $this->Html->link($lojascategoriaLoja->loja->id_loja, ['controller' => 'Lojas', 'action' => 'view', $lojascategoriaLoja->loja->id_loja]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Categorias Loja') ?></th>
                    <td><?= $lojascategoriaLoja->has('categorias_loja') ? $this->Html->link($lojascategoriaLoja->categorias_loja->id_categorias_lojas, ['controller' => 'CategoriasLojas', 'action' => 'view', $lojascategoriaLoja->categorias_loja->id_categorias_lojas]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lojascategoriaLoja->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
