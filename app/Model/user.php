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
                'rule' => array('minLength', '8'),
                'message' => 'Password minimum 8 characters'
            ),
            'role' => array(
                'role' => array(
                    'rule' => array('NotEmpty', array('admin', 'author')),
                    'message' => 'Please try again',
                    'allowEmpty' => 'false'
                )
            ),
            'status' => array(
                'status' => array(
                    'rule' => array('inlist', array('0', '1')),
                    'message' => 'Plase try again',
                    'allowEmpty' => 'false'
                )
            )
        );
    }
?>