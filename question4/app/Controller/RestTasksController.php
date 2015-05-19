<?php
App::uses('AppController', 'Controller');

class RestTasksController extends AppController {
    public $uses = array('Task');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');
 
    public $paginate = array(
        'fields' => array('id', 'name', 'description', 'priority', "created", "modified"),
        'limit' => 25,
        'order' => array('priority' => 'asc')
    );
 
    public function index() {
        $tasks = $this->paginate("Task");
        $this->set(array(
            'tasks' => $tasks,
            '_serialize' => array('tasks')
        ));
    }
 
    public function add() {
        $this->Task->create();
        if ($this->Task->save($this->request->data)) {
             $message = 'Task Created';
        } else {
            $message = 'Task Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
     
    public function view($id) {
        $task = $this->Task->findById($id);
        $this->set(array(
            'task' => $task,
            '_serialize' => array('task')
        ));
    }
 
     
    public function edit($id) {
        $this->Task->id = $id;
        if ($this->Task->save($this->request->data)) {
            $message = 'Task Saved';
        } else {
            $message = 'Task Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
     
    public function delete($id) {
        if ($this->Task->delete($id)) {
            $message = 'Task Deleted';
        } else {
            $message = 'Task Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}       
     