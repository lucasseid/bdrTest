<?php
App::uses('AppController', 'Controller');

class TasksController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $paginate = array(
        'fields' => array('id', 'name', 'description', 'priority', "created", "modified"),
        'limit' => 25,
        'order' => array('priority' => 'asc')
    );

    public function index()
    {
        $this->set('tasks', $this->paginate("Task"));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Task->create();
            if ($this->Task->save($this->request->data)) {
                $this->Session->setFlash(__('The Task has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your Task.'));
        }
    }

    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid Task'));
        }

        $task = $this->Task->findById($id);
        if (!$task) {
            throw new NotFoundException(__('Invalid Task'));
        }
        $this->set('task', $task);
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid Task'));
        }

        $task = $this->Task->findById($id);
        if (!$task) {
            throw new NotFoundException(__('Invalid Task'));
        }

        if ($this->request->is(array('task', 'put'))) {
            $this->Task->id = $id;
            if ($this->Task->save($this->request->data)) {
                $this->Session->setFlash(__('Your Task has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your Task.'));
        }

        if (!$this->request->data) {
            $this->request->data = $task;
        }
    }

    public function delete($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Task->delete($id)) {
            $this->Session->setFlash(
                __('The Task with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}
