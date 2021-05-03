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
                <tr>
                    <th><?= __('Aro Id') ?></th>
                    <td><?= $this->Number->format($usuario->aro_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Lojas') ?></h4>
                <?php if (!empty($usuario->lojas)) : ?>
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
                        <?php foreach ($usuario->lojas as $lojas) : ?>
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
            <div class="related">
                <h4><?= __('Related Endereco') ?></h4>
                <?php if (!empty($usuario->endereco)) : ?>
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
                        <?php foreach ($usuario->endereco as $endereco) : ?>
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
            <div class="related">
                <h4><?= __('Related Telefone') ?></h4>
                <?php if (!empty($usuario->telefone)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Telefone') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Loja Id') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuario->telefone as $telefone) : ?>
                        <tr>
                            <td><?= h($telefone->id_telefone) ?></td>
                            <td><?= h($telefone->numero) ?></td>
                            <td><?= h($telefone->loja_id) ?></td>
                            <td><?= h($telefone->usuario_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Telefone', 'action' => 'view', $telefone->id_telefone]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Telefone', 'action' => 'edit', $telefone->id_telefone]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefone', 'action' => 'delete', $telefone->id_telefone], ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id_telefone)]) ?>
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
