<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasLoja $categoriasLoja
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categorias Loja'), ['action' => 'edit', $categoriasLoja->id_categorias_lojas], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categorias Loja'), ['action' => 'delete', $categoriasLoja->id_categorias_lojas], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasLoja->id_categorias_lojas), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categorias Loja'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasLojas view content">
            <h3><?= h($categoriasLoja->id_categorias_lojas) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($categoriasLoja->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categorias Lojas') ?></th>
                    <td><?= $this->Number->format($categoriasLoja->id_categorias_lojas) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
