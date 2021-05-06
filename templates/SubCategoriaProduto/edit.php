<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubCategoriaProduto $subCategoriaProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subCategoriaProduto->id_subcategoria_produto],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subCategoriaProduto->id_subcategoria_produto), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sub Categoria Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subCategoriaProduto form content">
            <?= $this->Form->create($subCategoriaProduto) ?>
            <fieldset>
                <legend><?= __('Edit Sub Categoria Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('categoria_produto_id', ['options' => $categoriasProdutos, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
