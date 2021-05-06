<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UsuariosLojas Controller
 *
 * @property \App\Model\Table\UsuariosLojasTable $UsuariosLojas
 * @method \App\Model\Entity\UsuariosLoja[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosLojasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Produtos'],
        ];
        $usuariosLojas = $this->paginate($this->UsuariosLojas);

        $this->set(compact('usuariosLojas'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuarios Loja id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariosLoja = $this->UsuariosLojas->get($id, [
            'contain' => ['Usuarios', 'Produtos'],
        ]);

        $this->set(compact('usuariosLoja'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuariosLoja = $this->UsuariosLojas->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuariosLoja = $this->UsuariosLojas->patchEntity($usuariosLoja, $this->request->getData());
            if ($this->UsuariosLojas->save($usuariosLoja)) {
                $this->Flash->success(__('The usuarios loja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios loja could not be saved. Please, try again.'));
        }
        $usuarios = $this->UsuariosLojas->Usuarios->find('list', ['limit' => 200]);
        $produtos = $this->UsuariosLojas->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('usuariosLoja', 'usuarios', 'produtos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuarios Loja id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariosLoja = $this->UsuariosLojas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariosLoja = $this->UsuariosLojas->patchEntity($usuariosLoja, $this->request->getData());
            if ($this->UsuariosLojas->save($usuariosLoja)) {
                $this->Flash->success(__('The usuarios loja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios loja could not be saved. Please, try again.'));
        }
        $usuarios = $this->UsuariosLojas->Usuarios->find('list', ['limit' => 200]);
        $produtos = $this->UsuariosLojas->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('usuariosLoja', 'usuarios', 'produtos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuarios Loja id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariosLoja = $this->UsuariosLojas->get($id);
        if ($this->UsuariosLojas->delete($usuariosLoja)) {
            $this->Flash->success(__('The usuarios loja has been deleted.'));
        } else {
            $this->Flash->error(__('The usuarios loja could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
