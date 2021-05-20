<?php
declare(strict_types=1);

namespace App\Controller;

class LojasController extends AppController
{
   
    public $paginate = array(
        'fields' => array('id_loja', 'nome'),
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
        $fields = array('id_loja', 'nome');
        $contain = [];
      
        return $this->Lojas->get($id, compact('fields', 'contain'));
    }
    
    public function add()
    {
        $loja = $this->Lojas->newEmptyEntity();
        if ($this->request->is('post')) {
            $loja = $this->Lojas->patchEntity($loja, $this->request->getData());
            if ($this->Lojas->save($loja)) {
                $this->Flash->success(__('The loja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loja could not be saved. Please, try again.'));
        }
        $this->set(compact('loja'));
    }

    public function edit($id = null)
    {
        $loja = $this->Lojas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loja = $this->Lojas->patchEntity($loja, $this->request->getData());
            if ($this->Lojas->save($loja)) {
                $this->Flash->success(__('The loja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loja could not be saved. Please, try again.'));
        }
        $this->set(compact('loja'));
    }
}
