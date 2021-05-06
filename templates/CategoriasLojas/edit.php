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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriasLoja->id_categorias_lojas],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasLoja->id_categorias_lojas), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Categorias Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasLojas form content">
            <?= $this->Form->create($categoriasLoja) ?>
            <fieldset>
                <legend><?= __('Edit Categorias Loja') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
