<?php
$this->extend('/Common/form');

$this->assign('title', 'Novo Produto');

$formFields = $this->element('formCreate');
$formFields .= $this->Html->div('form-row',
    $this->Form->input('nome', array(
        'div' => array('class' => 'form-group col-md-6'),
    )) .
    $this->Form->input('valor', array(
        'div' => array('class' => 'form-group col-md-6'),
    )) .
    $this->Form->input('descricao', array(
        'div' => array('class' => 'form-group col-md-6'),
    ))
);

$this->assign('formFields', $formFields);

