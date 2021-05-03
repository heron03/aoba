<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loja $loja
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $loja->id_loja],
                ['confirm' => __('Are you sure you want to delete # {0}?', $loja->id_loja), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lojas form content">
            <?= $this->Form->create($loja) ?>
            <fieldset>
                <legend><?= __('Edit Loja') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('cnpj');
                    echo $this->Form->control('endereco_id');
                    echo $this->Form->control('site');
                    echo $this->Form->control('email');
                    echo $this->Form->control('usuarios._ids', ['options' => $usuarios]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
