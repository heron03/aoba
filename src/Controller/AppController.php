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
