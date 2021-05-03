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
            <?= $this->Html->link(__('List Estado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estado view content">
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
                <h4><?= __('Related Endereco') ?></h4>
                <?php if (!empty($estado->endereco)) : ?>
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
                        <?php foreach ($estado->endereco as $endereco) : ?>
                        <tr>
                            <td><?= h($endereco->id_endereco) ?></td>
                            <td><?= h($endereco->lougradouro) ?></td>
                            <td><?= h($endereco->cep) ?></td>
                            <td><?= h($endereco->numero) ?></td>
                            <td><?= h($endereco->cidade) ?></td>
                            <td><?= h($endereco->bairro) ?></td>
                            <td><?= h($endereco->loja_id) ?></td>
                            <td><?= h($endereco->usuario_id) ?></td>
                            <td><?= h($endereco->estado_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Endereco', 'action' => 'view', $endereco->id_endereco]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Endereco', 'action' => 'edit', $endereco->id_endereco]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Endereco', 'action' => 'delete', $endereco->id_endereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_endereco)]) ?>
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
