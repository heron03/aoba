<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->viewBuilder()->setLayout('bootstrap');
        $this->viewBuilder()->setHelpers(['Js']); 
    }

    public function index() {
        $entity = $this->{$this->getModelName()}->newEmptyEntity();
        $this->set(compact('entity'));
        $this->setPaginateConditions();
        try {
            $this->set($this->getControllerName(), $this->paginate());        
        } catch (NotFoundException $e) {
            $this->redirect('/' . $this->getControllerName());
        }        
    }

    public function add() {
        $entity = $this->{$this->getModelName()}->newEmptyEntity();
        if ($this->request->is('post')) {
            $entity = $this->{$this->getModelName()}->patchEnity($entity, $this->request->getData());
            if ($this->{$this->getModelName()}->save($entity)) {
                $this->Flash->bootstrap('Gravado com sucesso!', array('key' => 'success'));
                $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('entity'));
    }

    public function edit($id = null) {
        $entity = $this->getEditEntity($id);
        if ($this->request->is(['post', 'patch', 'put'])) {
            $entity = $this->{$this->getModelName()}->patchEnity($entity, $this->request->getData());
            if ($this->{$this->getModelName()}->save($entity)) {
                $this->Flash->bootstrap('Alterado com sucesso!', array('key' => 'success'));
                $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('entity'));
    }

    public function view($id = null) {
        $entity = $this->getEditEntity($id);
        $this->set(compact('entity'));
    }

    public function delete($id) {
        $entity = $this->getEditEntity($id);
        $this->{$this->getModelName()}->delete($entity);
        $this->Flash->bootstrap('Excluído com sucesso!', array('key' => 'warning'));
        $this->redirect(['action' => 'index']);
    }

    public function getControllerName() {
        return \Cake\Utility\Inflector::underscore($this->request->getParam('controller'));
    }

    public function getModelName() {
        return $this->request->getParam('controller');
    }
}
