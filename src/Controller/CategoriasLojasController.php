<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategoriasLojas Controller
 *
 * @property \App\Model\Table\CategoriasLojasTable $CategoriasLojas
 * @method \App\Model\Entity\CategoriasLoja[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasLojasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $categoriasLojas = $this->paginate($this->CategoriasLojas);

        $this->set(compact('categoriasLojas'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Loja id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasLoja = $this->CategoriasLojas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('categoriasLoja'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasLoja = $this->CategoriasLojas->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoriasLoja = $this->CategoriasLojas->patchEntity($categoriasLoja, $this->request->getData());
            if ($this->CategoriasLojas->save($categoriasLoja)) {
                $this->Flash->success(__('The categorias loja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias loja could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasLoja'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Loja id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasLoja = $this->CategoriasLojas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasLoja = $this->CategoriasLojas->patchEntity($categoriasLoja, $this->request->getData());
            if ($this->CategoriasLojas->save($categoriasLoja)) {
                $this->Flash->success(__('The categorias loja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias loja could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasLoja'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Loja id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasLoja = $this->CategoriasLojas->get($id);
        if ($this->CategoriasLojas->delete($categoriasLoja)) {
            $this->Flash->success(__('The categorias loja has been deleted.'));
        } else {
            $this->Flash->error(__('The categorias loja could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
