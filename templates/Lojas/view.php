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
                <h4><?= __('Related Enderecos') ?></h4>
                <?php if (!empty($loja->enderecos)) : ?>
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
                        <?php foreach ($loja->enderecos as $enderecos) : ?>
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
            <div class="related">
                <h4><?= __('Related Telefones') ?></h4>
                <?php if (!empty($loja->telefones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Telefone') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Loja Id') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($loja->telefones as $telefones) : ?>
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
