<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $endereco->id_endereco],
                ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_endereco), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Endereco'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="endereco form content">
            <?= $this->Form->create($endereco) ?>
            <fieldset>
                <legend><?= __('Edit Endereco') ?></legend>
                <?php
                    echo $this->Form->control('lougradouro');
                    echo $this->Form->control('cep');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('loja_id');
                    echo $this->Form->control('usuario_id', ['options' => $usuarios, 'empty' => true]);
                    echo $this->Form->control('estado_id', ['options' => $estado, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
