<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id_estado], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id_estado], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id_estado), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estados view content">
            <h3><?= h($estado->id_estado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Estado') ?></th>
                    <td><?= h($estado->id_estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($estado->nome) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Enderecos') ?></h4>
                <?php if (!empty($estado->enderecos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Endereco') ?></th>
                            <th><?= __('Lougradouro') ?></th>
                            <th><?= __('Cep') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Cidade') ?></th>
                            <th><?= __('Bairro') ?></th>
                            <th><?= __('Loja Id') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Estado Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($estado->enderecos as $enderecos) : ?>
                        <tr>
                            <td><?= h($enderecos->id_endereco) ?></td>
                            <td><?= h($enderecos->lougradouro) ?></td>
                            <td><?= h($enderecos->cep) ?></td>
                            <td><?= h($enderecos->numero) ?></td>
                            <td><?= h($enderecos->cidade) ?></td>
                            <td><?= h($enderecos->bairro) ?></td>
                            <td><?= h($enderecos->loja_id) ?></td>
                            <td><?= h($enderecos->usuario_id) ?></td>
                            <td><?= h($enderecos->estado_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Enderecos', 'action' => 'view', $enderecos->id_endereco]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Enderecos', 'action' => 'edit', $enderecos->id_endereco]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enderecos', 'action' => 'delete', $enderecos->id_endereco], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecos->id_endereco)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
