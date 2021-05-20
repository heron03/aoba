<?php
declare(strict_types=1);

namespace App\Controller;

class ProdutosController extends AppController
{
    public $paginate = array(
        'fields' => array('id_produtos', 'nome', 'valor'),
        'conditions' => array(),
        'limit' => 10,
        'order' => array('nome' => 'asc')    
    );

    public function setPaginateConditions() {
        $nome = '';
        if ($this->request->is('post')) {
            $nome = $this->request->getData('nome');
            $this->request->getSession()->write('nome', $nome);
        } else {
            $nome = $this->request->getSession()->read('nome');
        }
        if (!empty($nome)) {
            $this->paginate['conditions']['nome LIKE'] = '%' . trim($nome) . '%';
        }
    }

    public function getEditEntity($id) {
        $fields = array('id_produtos', 'nome', 'valor', 'descricao');
        $contain = [];
      
        return $this->Produtos->get($id, compact('fields', 'contain'));
    }
}
