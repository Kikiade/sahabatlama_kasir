<?php
    class VenuesController extends AppController{
        var $name = 'Venues';
        
        function add(){
            if($this->request->is('post')){
                $this->Venue->create();
                if(!empty($this->data)){
                    $venue = ucwords($this->data['Venue']['venue']);
                    if($this->Venue->save(array(
                                          'venue' => $venue
                                          )));
                }
            $this->Session->setFlash(__('Your Venue Has Been Save.'));
                $this->redirect(arrat('action' => 'index'));
            }
        }
    }
    
?>