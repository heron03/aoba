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
            <?= $this->Html->link(__('List Sub Categoria Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subCategoriaProduto form content">
            <?= $this->Form->create($subCategoriaProduto) ?>
            <fieldset>
                <legend><?= __('Add Sub Categoria Produto') ?></legend>
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
