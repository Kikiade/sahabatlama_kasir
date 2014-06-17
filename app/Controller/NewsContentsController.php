<?php
    class NewsContentsController extends AppController{
        var $helpers = array('Html', 'Form', 'Session', 'Paginator');
        var $components = array('Session');

        function beforeFilter(){
            parent::beforeFilter();
            $this->Auth->allow('add', 'logout','index','edit','delete','view', 'add');
        }

        function index(){
            $newscontent = $this->NewsContent->find('all');
			$this->set('newscontent', $newscontent);
			
			$data	=	$this->NewsContent->find('all',array(
						"conditions"	=>	array(
							"NewsContent.id"	=>	"1"
						)
					));
			//pr($data);
            //Paging page            
            $this->paginate = array(
                'limit' => 2
            );
            $newscontent = $this->paginate('NewsContent');
	    $this->set('newscontents', $newscontent);
        }
        function view($id = null){
            $this->NewsContent->id = $id;
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $newscontent= $this->NewsContent->findById($id);
            if(!$newscontent){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $this->set('newscontents', $newscontent);
        }
        function add(){
	    $this->set('news_categories', $this->NewsContent->NewsCategory->find(
		'list',
		array(
		    'order' => array('NewsCategory.id')
            )));    
            if($this->request->is('post')){
                $this->NewsContent->Create();
                if($this->NewsContent->save($this->request->data)){
                    $this->Session->setFlash(__('Your news content has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your news content'));
            }	
        }
        function edit($id = null) {
	    $this->set('news_categories', $this->NewsContent->NewsCategory->find(
		'list',
		array(
		    'order' => array('NewsCategory.id')
            )));
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $newscontent = $this->NewsContent->findById($id);
            if(!$newscontent){
                throw new NotFoundException(__('Invalid Entry'));
            }
            if($this->request->is(array('post', 'put'))){
                $this->NewsContent->id = $id;
                if($this->NewsContent->save($this->request->data)){
                    $this->Session->setFlash(__('Your news content has been update'));
                    return $this->redirect(array('action'=> 'index'));
                }
                $this->Session->setFlash(__('Unable to update your news content'));
            }
            if(!$this->request->data){
                $this->request->data = $newscontent;
            }
        }
        function delete($id){
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }
            if($this->NewsContent->delete($id)){
                $this->Session->setFlash(
                    __('The news content with id %s has been deleted.', ($id))
                );
                return $this->redirect(array('action' => 'index'));
            }
        }
        function afterFilter(){
            if($this->action!= 'newscontent'){
                $this->authenticate;
            }
        }
        
    }
    
?>