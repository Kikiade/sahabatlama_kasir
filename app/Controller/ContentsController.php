<?php
    class ContentsController extends AppController{
        var $helpers = array('Html', 'Form', 'Session', 'Paginator');
        var $components = array('Session');

        function beforeFilter(){
            parent::beforeFilter();
            $this->Auth->allow('add', 'logout','index','edit','delete','view', 'add');
        }

        function index(){
            $contents = $this->Content->find('all');
			$this->set('contents', $content);
			
			$data	=	$this->Content->find('all',array(
						"conditions"	=>	array(
							"Content.id"	=>	"1"
						)
					));
			//pr($data);
            //Paging page            
            $this->paginate = array(
                'limit' => 2
            );
            $content = $this->paginate('Content');
	    $this->set('contents', $content);
        }
        function view($id = null){
            $this->Content->id = $id;
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $content= $this->Content->findById($id);
            if(!$content){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $this->set('contents', $content);
        }
        function add(){
	    $this->set('news_contents', $this->Content->NewsContent->find(
		'list',
		array(
		    'order' => array('NewsContent.id')
            )));    
            if($this->request->is('post')){
                $this->Content->Create();
                if($this->Content->save($this->request->data)){
                    $this->Session->setFlash(__('Your content has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your content'));
            }	
        }
        function edit($id = null) {
	    $this->set('news_contents', $this->Content->NewsContent->find(
		'list',
		array(
		    'order' => array('NewsContent.id')
            )));
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $content = $this->Content->findById($id);
            if(!$content){
                throw new NotFoundException(__('Invalid Entry'));
            }
            if($this->request->is(array('post', 'put'))){
                $this->Content->id = $id;
                if($this->Content->save($this->request->data)){
                    $this->Session->setFlash(__('Your content has been update'));
                    return $this->redirect(array('action'=> 'index'));
                }
                $this->Session->setFlash(__('Unable to update your content'));
            }
            if(!$this->request->data){
                $this->request->data = $content;
            }
        }
        function delete($id){
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }
            if($this->Content->delete($id)){
                $this->Session->setFlash(
                    __('The content with id %s has been deleted.', ($id))
                );
                return $this->redirect(array('action' => 'index'));
            }
        }
        function afterFilter(){
            if($this->action!= 'content'){
                $this->authenticate;
            }
        }
        
    }
    
?>