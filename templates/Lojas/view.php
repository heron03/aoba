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
            <?= $this->Html->link(__('Edit Loja'), ['action' => 'edit', $loja->id_loja], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Loja'), ['action' => 'delete', $loja->id_loja], ['confirm' => __('Are you sure you want to delete # {0}?', $loja->id_loja), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lojas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Loja'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lojas view content">
            <h3><?= h($loja->id_loja) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($loja->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cnpj') ?></th>
                    <td><?= h($loja->cnpj) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site') ?></th>
                    <td><?= h($loja->site) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($loja->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Loja') ?></th>
                    <td><?= $this->Number->format($loja->id_loja) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco Id') ?></th>
                    <td><?= $this->Number->format($loja->endereco_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Usuarios') ?></h4>
                <?php if (!empty($loja->usuarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Usuarios') ?></th>
                            <th><?= __('Aro Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Senha') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($loja->usuarios as $usuarios) : ?>
                        <tr>
                            <td><?= h($usuarios->id_usuarios) ?></td>
                            <td><?= h($usuarios->aro_id) ?></td>
                            <td><?= h($usuarios->nome) ?></td>
                            <td><?= h($usuarios->email) ?></td>
                            <td><?= h($usuarios->senha) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id_usuarios]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id_usuarios]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id_usuarios], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id_usuarios)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Produtos') ?></h4>
                <?php if (!empty($loja->produtos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Produtos') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Sub Categoria Id') ?></th>
                            <th><?= __('Valor') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Loja Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($loja->produtos as $produtos) : ?>
                        <tr>
                            <td><?= h($produtos->id_produtos) ?></td>
                            <td><?= h($produtos->nome) ?></td>
                            <td><?= h($produtos->sub_categoria_id) ?></td>
                            <td><?= h($produtos->valor) ?></td>
                            <td><?= h($produtos->descricao) ?></td>
                            <td><?= h($produtos->loja_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id_produtos]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id_produtos]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id_produtos], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id_produtos)]) ?>
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
