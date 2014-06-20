<?php
//app/Model/User.php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordhasher', 'Controller/Component/Auth');

class User extends AppModel{
    function beforeSave($option = array()){
        if(isset($this->data[$this->alias]['password'])){
            $passwordHasher = new SimplePasswordhasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }
    
    public $validate = array(
        'username' => array(
        'required' => array(
        'rule' => array ('notEmpty'),
        'message' => 'A username is rquired'
        ) 
       ),
        'password' => array(
        'required' => array(
        'rule' => array ('notEmpty'),
        'message' => 'A password is required'
        )
       ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
                )
            )    
     );
}
?>