<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SubCategoriaProduto Controller
 *
 * @property \App\Model\Table\SubCategoriaProdutoTable $SubCategoriaProduto
 * @method \App\Model\Entity\SubCategoriaProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubCategoriaProdutoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CategoriasProdutos'],
        ];
        $subCategoriaProduto = $this->paginate($this->SubCategoriaProduto);

        $this->set(compact('subCategoriaProduto'));
    }

    /**
     * View method
     *
     * @param string|null $id Sub Categoria Produto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subCategoriaProduto = $this->SubCategoriaProduto->get($id, [
            'contain' => ['CategoriasProdutos'],
        ]);

        $this->set(compact('subCategoriaProduto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subCategoriaProduto = $this->SubCategoriaProduto->newEmptyEntity();
        if ($this->request->is('post')) {
            $subCategoriaProduto = $this->SubCategoriaProduto->patchEntity($subCategoriaProduto, $this->request->getData());
            if ($this->SubCategoriaProduto->save($subCategoriaProduto)) {
                $this->Flash->success(__('The sub categoria produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub categoria produto could not be saved. Please, try again.'));
        }
        $categoriasProdutos = $this->SubCategoriaProduto->CategoriasProdutos->find('list', ['limit' => 200]);
        $this->set(compact('subCategoriaProduto', 'categoriasProdutos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sub Categoria Produto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subCategoriaProduto = $this->SubCategoriaProduto->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subCategoriaProduto = $this->SubCategoriaProduto->patchEntity($subCategoriaProduto, $this->request->getData());
            if ($this->SubCategoriaProduto->save($subCategoriaProduto)) {
                $this->Flash->success(__('The sub categoria produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub categoria produto could not be saved. Please, try again.'));
        }
        $categoriasProdutos = $this->SubCategoriaProduto->CategoriasProdutos->find('list', ['limit' => 200]);
        $this->set(compact('subCategoriaProduto', 'categoriasProdutos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sub Categoria Produto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subCategoriaProduto = $this->SubCategoriaProduto->get($id);
        if ($this->SubCategoriaProduto->delete($subCategoriaProduto)) {
            $this->Flash->success(__('The sub categoria produto has been deleted.'));
        } else {
            $this->Flash->error(__('The sub categoria produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
