<?php
$this->extend('/Common/index');

$this->assign('title', 'Produtos');

$searchFields = $this->Form->input('nome', array(
    'required' => false,
    'label' => array('text' => 'Nome', 'class' => 'sr-only'),
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Nome...'
));

$this->assign('searchFields', $searchFields);

$titulos = array('Nome', 'Valor', '');
$tableHeaders = $this->Html->tableHeaders($titulos);
$this->assign('tableHeaders', $tableHeaders);

$detalhe = array();
foreach ($produtos as $produto) {
    $editLink = $this->Html->link(__('Alterar'), ['action' =>'edit', $produto->id_produtos], ['update' => '#content']);
    $deleteLink = $this->Form->postLink(__('Excluir'), ['action' => 'delete', $produto->id_produtos], ['update' => '#content', 'confirm' => __('Tem certeza?')]);
    $viewLink = $this->Html->link($produto->nome, ['action' => 'view', $produto->id_produtos], ['update' => '#content']);
    $detalhe[] = [
        $viewLink, 
        (string)$produto->valor,
        $editLink . ' ' . $deleteLink
    ];
}
$tableCells = $this->Html->tableCells($detalhe);
$this->assign('tableCells', $tableCells);