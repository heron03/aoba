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
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id_usuarios], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id_usuarios], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuarios), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->id_usuarios) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($usuario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($usuario->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($usuario->senha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Usuarios') ?></th>
                    <td><?= $this->Number->format($usuario->id_usuarios) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Enderecos') ?></h4>
                <?php if (!empty($usuario->enderecos)) : ?>
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
                        <?php foreach ($usuario->enderecos as $enderecos) : ?>
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
            <div class="related">
                <h4><?= __('Related Telefones') ?></h4>
                <?php if (!empty($usuario->telefones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Telefone') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Loja Id') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuario->telefones as $telefones) : ?>
                        <tr>
                            <td><?= h($telefones->id_telefone) ?></td>
                            <td><?= h($telefones->numero) ?></td>
                            <td><?= h($telefones->loja_id) ?></td>
                            <td><?= h($telefones->usuario_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Telefones', 'action' => 'view', $telefones->id_telefone]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Telefones', 'action' => 'edit', $telefones->id_telefone]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefones', 'action' => 'delete', $telefones->id_telefone], ['confirm' => __('Are you sure you want to delete # {0}?', $telefones->id_telefone)]) ?>
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
