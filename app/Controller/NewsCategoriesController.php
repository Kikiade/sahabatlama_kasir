<?php
    class NewsCategoriesController extends AppController{
        var $helpers = array('Html', 'Form', 'Session', 'Paginator');
        var $components = array('Session');

        function beforeFilter(){
            parent::beforeFilter();
            $this->Auth->allow('add', 'logout','index','edit','delete','view', 'add');
        }

        function index(){
            $this->set('newsCategories', $this->NewsCategory->find('all'));
            
            Configure::write('debug', 2);
            
            //paging page
	    $this->paginate = array(
		'limit' => 2
	    );
            $newscategory = $this->paginate('NewsCategory');
	    $this->set('newscategories', $newscategory);
        }
        function view($id = null){
            $this->NewsCategory->id = $id;
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $newscategory = $this->NewsCategory->findById($id);
            if(!$newscategory){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $this->set('newscategories', $newscategory);
        }
        function add(){
            //post get put
            if($this->request->is('post')){
                Configure::write('debug', 2);
				pr($this->request->data);
                $this->NewsCategory->Create();
                if($this->NewsCategory->save($this->request->data)){
                    $this->Session->setFlash(__('Your news category has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your news category'));
            }
        }
        function edit($id = null) {
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $newscategory = $this->NewsCategory->findById($id);
            if(!$newscategory){
                throw new NotFoundException(__('Invalid Entry'));
            }
            if($this->request->is(array('post', 'put'))){
                $this->NewsCategory->id = $id;
                if($this->NewsCategory->save($this->request->data)){
                    $this->Session->setFlash(__('Your news category has been update'));
                    return $this->redirect(array('action'=> 'index'));
                }
                $this->Session->setFlash(__('Unable to update your news category'));
            }
            if(!$this->request->data){
                $this->request->data = $newscategory;
            }
        }
        function delete($id){
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }
            if($this->NewsCategory->delete($id)){
                $this->Session->setFlash(
                    __('The news category with id %s has been deleted.', ($id))
                );
                return $this->redirect(array('action' => 'index'));
            }
        }
        function afterFilter(){
            if($this->action!= 'newscategory'){
                $this->authenticate;
            }
        }
        
    }
    
?>