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
    
    public function add()
    {
        $produto = $this->Produtos->newEmptyEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $subCategoriaProduto = $this->Produtos->SubCategoriaProduto->find('list', ['limit' => 200]);
        $lojas = $this->Produtos->Lojas->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'subCategoriaProduto', 'lojas'));
    }

    public function edit($id = null)
    {
        
        $fields = array('id_produtos', 'nome', 'valor', 'descricao');
        $contain = [];
      
        $produto = $this->Produtos->get($id, compact('fields', 'contain'));

        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $subCategoriaProduto = $this->Produtos->SubCategoriaProduto->find('list', ['limit' => 200]);
        $lojas = $this->Produtos->Lojas->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'subCategoriaProduto', 'lojas'));
    }

}
