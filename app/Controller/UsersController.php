<?php
    class UsersController extends AppController{
        var $helpers = array('Html','Form');
        /*
        function view_active(){
            $this->set('vehicle_category_costs', '$vehicle_category_costs');    
        }
        */
        function beforeFilter(){
            parent::beforeFilter();
            $this->Auth->allow('add', 'logout');
        }
        
        function login(){
            if($this->request->is('post')){
                if($this->Auth->login()){
                    $this->redirect($this->Auth->redirect());
                }
                $this->Session->setFlash(__('Invalid username or password'));
            }
        }
        
        function index(){
            $this->User->recursive = 0;
            $this->set('users', $this->paginate());
        }
        
        function view($id = null){
            $this->User->id = $id;
            if(!$this->users->exists()){
                throw new NotFoundException(__('Invalid User'));
            }
            $this->set('user', $this->User->read(null, $id));
        }

        function add(){
            if($this->request->is('post')){
                $this->User->Create();
                if($this->User->save($this->request->data)){
                    $this->Session->setFlash(__('Your user has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('The user could not be saved, Please try again.'));
            }
        }
        
        function edit($id = null){
            $this->User->id = $id;
            if(!$this->User->exists()){
                throw new NotFoundException(__('Invalid User'));
            }
            if($this->request->is('post') || $this->request->is('put')){
                 if ($this->User->save($this->request->data)) {
                 $this->Session->setFlash(__('The user has been saved'));
                 return $this->redirect(array('action' => 'index'));
            }
                 $this->Session->setFlash(
                 __('The user could not be saved. Please, try again.')
                );
            }else{
                $this->request->data = $this->User->read(null, $id);
                unset($this->request->data['User']['password']);
            }
        }
        
        function delete($id = null){
            $this->request->onlyAllow('post');
            $this->User->id = $id;
            if(!$this->user->exists()){
                throw new NotFoundException(__('Invalid User'));
            }
            if($this->User->delete()){
                $this->Session->setFlash(__('User Deleted'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('User was not deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        
        function logout(){
            return $this->redirect($this->Auth->logout());
        }
       
    } 
?>