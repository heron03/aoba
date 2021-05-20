<?php
$this->extend('/Common/form');

$this->assign('title', 'Novo Lojas');

$formFields = $this->element('formCreate');
$formFields .= $this->Html->div('row',
    $this->Form->control('nome', array(
        'div' => array('class' => 'form-group col-md-6'),
    )) .
    $this->Form->control('cnpj', array(
        'div' => array('class' => 'form-group col-md-6'),
    ))
);
$formFields .= $this->Html->div('row',
    $this->Form->control('endereco_id', array(
        'div' => array('class' => 'form-group col-md-6'),
    )) .
    $this->Form->control('site', array(
        'div' => array('class' => 'form-group col-md-6'),
    ))
);
$formFields .= $this->Html->div('row',
    $this->Form->control('site', array(
        'div' => array('class' => 'form-group col-md-6'),
    ))
);

$this->assign('formFields', $formFields);

