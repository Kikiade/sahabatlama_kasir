<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

    class User Extends AppModel{
    function beforeSave($options = array()){
        if(isset($this->data[$this->alias]['password'])){
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }
        public $validate = array(
            'name' => array(
                'required' => array(
                    'rule' => array('NotEmpty'),
                    'message' => 'Name is Required'
                )    
            ),
            'username' => array(
                'required' => array(
                    'rule' => array('notEmpty'),
                    'message' => 'Username is Required'
                )
            ),
            'password' => array(
                'required' => array(
                    'rule' => array('notEmpty'),
                    'message' => 'Password is Required'
                )  
            ),
            'role' => array(
                'valid' => array(
                    'rule' => array('NotEmpty', array('admin', 'author')),
                    'message' => 'Please try again',
                    'allowEmpty' => 'false'
                )
            )
        );
    }
?>