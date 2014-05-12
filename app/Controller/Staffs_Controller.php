<?php
    class StaffsController extends AppController{
        var $name = 'Staffs';
        var $helpers = array('Html', 'Form', 'Session');
        var $components = array('Session');
        
        function index(){
            $this->set('staffs', $this->Post->find('all'));
        }
        function view(){
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $post = $this->Staff->findById($id);
            if(!id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $this->set('staff', $staff);
        }
        function add(){
            if($this->request->is('staff')){
                $this->Staff->Create();
                if($this->Staff->save($this->request->data)){
                    $this->Session->setFlash(__('Your staff has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your staff'));
            }
        }
    }
    
?>