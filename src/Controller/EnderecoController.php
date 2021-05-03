<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Endereco Controller
 *
 * @property \App\Model\Table\EnderecoTable $Endereco
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnderecoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Estado'],
        ];
        $endereco = $this->paginate($this->Endereco);

        $this->set(compact('endereco'));
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Endereco->get($id, [
            'contain' => ['Usuarios', 'Estado', 'Lojas'],
        ]);

        $this->set(compact('endereco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Endereco->newEmptyEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Endereco->patchEntity($endereco, $this->request->getData());
            if ($this->Endereco->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
        }
        $usuarios = $this->Endereco->Usuarios->find('list', ['limit' => 200]);
        $estado = $this->Endereco->Estado->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'usuarios', 'estado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Endereco->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Endereco->patchEntity($endereco, $this->request->getData());
            if ($this->Endereco->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
        }
        $usuarios = $this->Endereco->Usuarios->find('list', ['limit' => 200]);
        $estado = $this->Endereco->Estado->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'usuarios', 'estado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Endereco->get($id);
        if ($this->Endereco->delete($endereco)) {
            $this->Flash->success(__('The endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The endereco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
