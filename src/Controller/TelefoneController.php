<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Telefone Controller
 *
 * @property \App\Model\Table\TelefoneTable $Telefone
 * @method \App\Model\Entity\Telefone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TelefoneController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lojas', 'Usuarios'],
        ];
        $telefone = $this->paginate($this->Telefone);

        $this->set(compact('telefone'));
    }

    /**
     * View method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telefone = $this->Telefone->get($id, [
            'contain' => ['Lojas', 'Usuarios'],
        ]);

        $this->set(compact('telefone'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telefone = $this->Telefone->newEmptyEntity();
        if ($this->request->is('post')) {
            $telefone = $this->Telefone->patchEntity($telefone, $this->request->getData());
            if ($this->Telefone->save($telefone)) {
                $this->Flash->success(__('The telefone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefone could not be saved. Please, try again.'));
        }
        $lojas = $this->Telefone->Lojas->find('list', ['limit' => 200]);
        $usuarios = $this->Telefone->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('telefone', 'lojas', 'usuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telefone = $this->Telefone->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefone = $this->Telefone->patchEntity($telefone, $this->request->getData());
            if ($this->Telefone->save($telefone)) {
                $this->Flash->success(__('The telefone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefone could not be saved. Please, try again.'));
        }
        $lojas = $this->Telefone->Lojas->find('list', ['limit' => 200]);
        $usuarios = $this->Telefone->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('telefone', 'lojas', 'usuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telefone = $this->Telefone->get($id);
        if ($this->Telefone->delete($telefone)) {
            $this->Flash->success(__('The telefone has been deleted.'));
        } else {
            $this->Flash->error(__('The telefone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
