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
                'limit' => 5
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
        /*
        function search() {
            if (!empty ($this->data)) {
                    $search = $this->data['NewsContent']['search'];
                    
                    $options = array (
                        'limit' => 10,
                        'fields' => array('NewsContent.id','NewsContent.title'),
                        'conditions' => array (
                            'or' => array (
                                'NewsContent.id LIKE' => '%' . $search . '%',
                                'Product.title LIKE' => '%' . $search . '%'),
                            )
                        );
                    $this->NewsContent->find('all', $options);
                    $this->set('keyword', $keyword);
            }
        }
        */
        function add(){
            $this->set('news_categories', $this->NewsContent->NewsCategory->find('list', array('order' => array('NewsCategory.id'))));    
            
	        if(!empty($this->data)) {
                $upload = $this->data['Content']['url']['tmp_name'];
                $name   = $this->data['Content']['url']['name'];
                $type   = $this->data['Content']['url']['type'];
                $size   = $this->data['Content']['url']['size'];
                
                
                if($this->request->is('post')){
                    $this->NewsContent->create();
                    $newscontent = $this->NewsContent->save($this->request->data);

                    if(!empty($name)){
                        var_dump("masuk");
                        $this->request->data['Content']['model_id'] = $this->NewsContent->id;
                        $this->NewsContent->Content->create();
                        $this->NewsContent->Content->save($this->request->data);
                        $id_content=$this->NewsContent->Content->id;
                        $this->NewsContent->Content->updateAll(
                            array(
                                "url"   => "'contents/News/".$id_content."/".$id_content."_small.png'"        
                            ),
                            array(
                                "Content.id"    => $id_content
                            )
                        );

                        $direktori  = "C:/xampp/htdocs/sl_kasir/app/webroot/contents/News/$id_content/";

                        if(!is_dir($direktori))
                            mkdir($direktori);
                        
                        if (!empty($type)) {
                            
                            $ext   =   pathinfo($name,PATHINFO_EXTENSION);
                            $file_destination   =   $direktori.".".$ext;

                            var_dump($file_destination);
                            move_uploaded_file($upload, $file_destination);
                    
                        }
                    }
                    //return $this->redirect(array('action'=> 'index'));
                }
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