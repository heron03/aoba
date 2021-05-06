<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $telefone->id_telefone],
                ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id_telefone), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Telefones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="telefones form content">
            <?= $this->Form->create($telefone) ?>
            <fieldset>
                <legend><?= __('Edit Telefone') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('loja_id', ['options' => $lojas, 'empty' => true]);
                    echo $this->Form->control('usuario_id', ['options' => $usuarios, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
