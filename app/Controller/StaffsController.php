<?php
    class StaffsController extends AppController{
        var $name = 'Staffs';
        var $helpers = array('Html', 'Form', 'Session', 'Paginator');
        var $components = array('Session');

        function beforeFilter(){
            parent::beforeFilter();
            $this->Auth->allow('add', 'logout','index','edit','delete','view', 'add');
        }

        function index(){
            $this->set('staffs', $this->Staff->find('all'));
            
            Configure::write('debug', 2);
            
            //paging page
	    $this->paginate = array(
		'limit' => 2
	    );
            $staff = $this->paginate('Staff');
	    $this->set('staffs', $staff);
        }
        function view($id = null){
            $this->Staff->id = $id;
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $staff = $this->Staff->findById($id);
            if(!$staff){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $this->set('staff', $staff);
        }

        function search(){
            $this->set('results', $this->Staff->search($this->data['Staff']['id']));
        }

        function add(){
            //post get put
            if($this->request->is('post')){
                Configure::write('debug', 2);
				pr($this->request->data);
                $this->Staff->Create();
                if($this->Staff->save($this->request->data)){
                    $this->Session->setFlash(__('Your staff has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your staff'));
            }
        }
        function edit($id = null) {
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $staff = $this->Staff->findById($id);
            if(!$staff){
                throw new NotFoundException(__('Invalid Entry'));
            }
            if($this->request->is(array('post', 'put'))){
                $this->Staff->id = $id;
                if($this->Staff->save($this->request->data)){
                    $this->Session->setFlash(__('Your staff has been update'));
                    return $this->redirect(array('action'=> 'index'));
                }
                $this->Session->setFlash(__('Unable to update your staff'));
            }
            if(!$this->request->data){
                $this->request->data = $staff;
            }
        }
        function delete($id){
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }
            if($this->Staff->delete($id)){
                $this->Session->setFlash(
                    __('The staff with id %s has been deleted.', ($id))
                );
                return $this->redirect(array('action' => 'index'));
            }
        }

        public function isAuthorized($user){
             //All registered user can add post
             if ($this->action == 'add'){
                 return true;
             }
             
             //The owner of a post can edit and delete it
             if(in_array($this->action, array('edit', 'delete'))){
                 $staffId = (int) $this->request->params['pass'][0];
                 if($this->Staff->isOwnedBy($staffId, $user['id'])){
                     return true;
                 }
             }
             return parent::isAuthorized ($user);
         }
    }
    
?>