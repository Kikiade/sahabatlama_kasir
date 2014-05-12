<?php
    class CategoriesController extends AppController{
        var $name = 'Categories';
        
        function add(){
            if($this->request->is('post')){
                $this->Categorie->create();
                if(!empty($this->data)){
                    $categorie = ucwords($this->data['Categorie']['categorie']);
                    if($this->Categorie->save(array(
                                          'categorie' => $categorie
                                          )));
                }
            $this->Session->setFlash(__('Your Categories Has Been Save.'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
?>