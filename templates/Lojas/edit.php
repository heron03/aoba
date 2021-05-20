<?php
$this->extend('/Common/form');

$this->assign('title', 'Editar Lojas');

$formFields = $this->element('formCreate');
$formFields .= $this->Form->hidden('id_loja');
$formFields .= $this->Html->div('form-row',
    $this->Form->input('nome', array(
        'div' => array('class' => 'form-group col-md-6'),
    )) .
    $this->Form->input('cnpj', array(
        'div' => array('class' => 'form-group col-md-6'),
    ))
);

$formFields .= $this->Form->input('nome', array(
        'type' => 'text',
        'label' => array('text' => 'Nome'),
        'required' => false,
        'div' => array('class' => 'form-group col-md-3'),
        'class' => 'form-control uppercase',
        'disabled' => false,
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('cnpj', array(
        'type' => 'text',
        'label' => array('text' => 'CNPJ'),
        'required' => false,
        'disabled' => false,
        'div' => array('class' => 'form-group col-md-3 offset-md-3 offset--mr-3'),
        'class' => 'form-control uppercase',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))
;
$this->assign('formFields', $formFields);

