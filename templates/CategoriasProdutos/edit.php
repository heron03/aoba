<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriasProduto->id_categorias_produtos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasProduto->id_categorias_produtos), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Categorias Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasProdutos form content">
            <?= $this->Form->create($categoriasProduto) ?>
            <fieldset>
                <legend><?= __('Edit Categorias Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
