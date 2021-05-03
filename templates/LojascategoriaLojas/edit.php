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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lojascategoriaLoja->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lojascategoriaLoja->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lojascategoria Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lojascategoriaLojas form content">
            <?= $this->Form->create($lojascategoriaLoja) ?>
            <fieldset>
                <legend><?= __('Edit Lojascategoria Loja') ?></legend>
                <?php
                    echo $this->Form->control('lojas_id', ['options' => $lojas, 'empty' => true]);
                    echo $this->Form->control('categorias_id', ['options' => $categoriasLojas, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
