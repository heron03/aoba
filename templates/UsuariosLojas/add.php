<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuariosLoja $usuariosLoja
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Usuarios Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuariosLojas form content">
            <?= $this->Form->create($usuariosLoja) ?>
            <fieldset>
                <legend><?= __('Add Usuarios Loja') ?></legend>
                <?php
                    echo $this->Form->control('usuarios_id', ['options' => $usuarios, 'empty' => true]);
                    echo $this->Form->control('produtos_id', ['options' => $produtos, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
