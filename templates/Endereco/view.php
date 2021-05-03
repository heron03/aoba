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
            <?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->id_endereco], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->id_endereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_endereco), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Endereco'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Endereco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="endereco view content">
            <h3><?= h($endereco->id_endereco) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lougradouro') ?></th>
                    <td><?= h($endereco->lougradouro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cep') ?></th>
                    <td><?= h($endereco->cep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($endereco->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($endereco->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($endereco->bairro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $endereco->has('usuario') ? $this->Html->link($endereco->usuario->id_usuarios, ['controller' => 'Usuarios', 'action' => 'view', $endereco->usuario->id_usuarios]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $endereco->has('estado') ? $this->Html->link($endereco->estado->id_estado, ['controller' => 'Estado', 'action' => 'view', $endereco->estado->id_estado]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Endereco') ?></th>
                    <td><?= $this->Number->format($endereco->id_endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loja Id') ?></th>
                    <td><?= $this->Number->format($endereco->loja_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Lojas') ?></h4>
                <?php if (!empty($endereco->lojas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Loja') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Cnpj') ?></th>
                            <th><?= __('Endereco Id') ?></th>
                            <th><?= __('Site') ?></th>
                            <th><?= __('Email') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($endereco->lojas as $lojas) : ?>
                        <tr>
                            <td><?= h($lojas->id_loja) ?></td>
                            <td><?= h($lojas->nome) ?></td>
                            <td><?= h($lojas->cnpj) ?></td>
                            <td><?= h($lojas->endereco_id) ?></td>
                            <td><?= h($lojas->site) ?></td>
                            <td><?= h($lojas->email) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Lojas', 'action' => 'view', $lojas->id_loja]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Lojas', 'action' => 'edit', $lojas->id_loja]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lojas', 'action' => 'delete', $lojas->id_loja], ['confirm' => __('Are you sure you want to delete # {0}?', $lojas->id_loja)]) ?>
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
