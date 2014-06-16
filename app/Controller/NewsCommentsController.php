<?php
	class NewsCommentsController extends AppController{
		var $helpers = array('Html', 'Form', 'Paginator');
		var $components = array('Session');
		
		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('index', 'view', 'add', 'edit', 'delete');
		}
		
		public function index()
		{
			Configure::write('debug', 2);
			//pr ($data);
			
			//paging page
			$this->paginate = array(
				 'limit' => 3
			);
			$comments = $this->paginate('NewsComment');
			$this->set('news_comments', $comments);
		}

		function add(){
            //post get put
            if($this->request->is('post')){
                Configure::write('debug', 2);
				pr($this->request->data);
                $this->NewsComment->Create();
                if($this->NewsComment->save($this->request->data)){
                    $this->Session->setFlash(__('Your news comment has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your news comment'));
            }
        }

        public function edit($id = null){
			/*$this->set('vehicle_categories', $this->NewsComment->VehicleCategory->find(
            'list',
            array(
                'order' => array('VehicleCategory.id')
            )));*/

			/*if(!$id){
				throw new NotFoundException(__('Invalid Comments'));
			}*/
			$comments = $this->NewsComment->findById($id);
			/*if (!$comments){
				throw new NotFoundException(__('Invalid Comments'));
			}*/
			
			if ($this->request->is(array('post', 'put'))){
				$this->NewsComment->id = $id;
				if($this->NewsComment->save($this->request->data)){
					$this->Session->setFlash(__('your Comments has been updated'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('unable to updated your comments'));
			}
			if(!$this->request->data){
				$this->request->data = $comments;
			}
		}

		function view($id = null){
            $this->NewsComment->id = $id;
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $comments = $this->NewsComment->findById($id);
            if(!$comments){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $this->set('post', $comments);
        }

		function delete($id){
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }
            if($this->NewsComment->delete($id)){
                $this->Session->setFlash(
                    __('The news category with id %s has been deleted.', ($id))
                );
                return $this->redirect(array('action' => 'index'));
            }
        }
	}
?>