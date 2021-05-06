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
            <?= $this->Html->link(__('List Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lojas form content">
            <?= $this->Form->create($loja) ?>
            <fieldset>
                <legend><?= __('Add Loja') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('cnpj');
                    echo $this->Form->control('endereco_id');
                    echo $this->Form->control('site');
                    echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
