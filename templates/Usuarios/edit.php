<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuario->id_usuarios],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuarios), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Edit Usuario') ?></legend>
                <?php
                    echo $this->Form->control('aro_id');
                    echo $this->Form->control('nome');
                    echo $this->Form->control('email');
                    echo $this->Form->control('senha');
                    echo $this->Form->control('lojas._ids', ['options' => $lojas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
