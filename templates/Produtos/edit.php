<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produto->id_produtos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_produtos), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos form content">
            <?= $this->Form->create($produto) ?>
            <fieldset>
                <legend><?= __('Edit Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('sub_categoria_id', ['options' => $subCategoriaProduto, 'empty' => true]);
                    echo $this->Form->control('valor');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('loja_id', ['options' => $lojas, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>