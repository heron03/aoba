<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LojascategoriaLojas Controller
 *
 * @property \App\Model\Table\LojascategoriaLojasTable $LojascategoriaLojas
 * @method \App\Model\Entity\LojascategoriaLoja[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LojascategoriaLojasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lojas', 'CategoriasLojas'],
        ];
        $lojascategoriaLojas = $this->paginate($this->LojascategoriaLojas);

        $this->set(compact('lojascategoriaLojas'));
    }

    /**
     * View method
     *
     * @param string|null $id Lojascategoria Loja id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lojascategoriaLoja = $this->LojascategoriaLojas->get($id, [
            'contain' => ['Lojas', 'CategoriasLojas'],
        ]);

        $this->set(compact('lojascategoriaLoja'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lojascategoriaLoja = $this->LojascategoriaLojas->newEmptyEntity();
        if ($this->request->is('post')) {
            $lojascategoriaLoja = $this->LojascategoriaLojas->patchEntity($lojascategoriaLoja, $this->request->getData());
            if ($this->LojascategoriaLojas->save($lojascategoriaLoja)) {
                $this->Flash->success(__('The lojascategoria loja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lojascategoria loja could not be saved. Please, try again.'));
        }
        $lojas = $this->LojascategoriaLojas->Lojas->find('list', ['limit' => 200]);
        $categoriasLojas = $this->LojascategoriaLojas->CategoriasLojas->find('list', ['limit' => 200]);
        $this->set(compact('lojascategoriaLoja', 'lojas', 'categoriasLojas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lojascategoria Loja id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lojascategoriaLoja = $this->LojascategoriaLojas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lojascategoriaLoja = $this->LojascategoriaLojas->patchEntity($lojascategoriaLoja, $this->request->getData());
            if ($this->LojascategoriaLojas->save($lojascategoriaLoja)) {
                $this->Flash->success(__('The lojascategoria loja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lojascategoria loja could not be saved. Please, try again.'));
        }
        $lojas = $this->LojascategoriaLojas->Lojas->find('list', ['limit' => 200]);
        $categoriasLojas = $this->LojascategoriaLojas->CategoriasLojas->find('list', ['limit' => 200]);
        $this->set(compact('lojascategoriaLoja', 'lojas', 'categoriasLojas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lojascategoria Loja id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lojascategoriaLoja = $this->LojascategoriaLojas->get($id);
        if ($this->LojascategoriaLojas->delete($lojascategoriaLoja)) {
            $this->Flash->success(__('The lojascategoria loja has been deleted.'));
        } else {
            $this->Flash->error(__('The lojascategoria loja could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
