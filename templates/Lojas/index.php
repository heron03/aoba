<?php
$this->extend('/Common/index');

$this->assign('title', 'Lojas');

$searchFields = $this->Form->input('nome', array(
    'required' => false,
    'label' => array('text' => 'Nome', 'class' => 'sr-only'),
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Nome...'
));

$this->assign('searchFields', $searchFields);

$titulos = array('Nome', 'Avaliação', '');
$tableHeaders = $this->Html->tableHeaders($titulos);
$this->assign('tableHeaders', $tableHeaders);

$detalhe = array();
foreach ($lojas as $loja) {
    $editLink = $this->Html->link(__('Alterar'), ['action' =>'edit', $loja->id_loja], ['update' => '#content']);
    $deleteLink = $this->Form->postLink(__('Excluir'), ['action' => 'delete', $loja->id_loja], ['update' => '#content', 'confirm' => __('Tem certeza?')]);
    $viewLink = $this->Html->link($loja->nome, ['action' => 'view', $loja->id_loja], ['update' => '#content']);
    $detalhe[] = [
        $viewLink, 
        $editLink . ' ' . $deleteLink
    ];
}
$tableCells = $this->Html->tableCells($detalhe);
$this->assign('tableCells', $tableCells);