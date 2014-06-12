<?php

// app/Model/User.php
App::uses('AppModel', 'Model');

class Tenant extends AppModel {
   public $name = 'Tenant';
    
    public $validate = array(
        'first_name' => array(
            'rule' => 'notEmpty'
        ),
        'last_name' => array(
            'rule' => 'notEmpty'
        ),
           'address' => array(
            'rule' => 'notEmpty'
        ),
           'address_cont' => array(
           
        ),
             'city' => array(
            'rule' => 'notEmpty'
        ),
             'state' => array(
            'rule' => 'notEmpty'
        ),
             'start_date' => array(
            'rule' => 'notEmpty'
        ),
             'end_date' => array(
            'rule' => 'notEmpty'
        ),
             'phone_number' => array(
            'rule' => 'notEmpty'
        ),
             'condition_desc' => array(
            'rule' => 'notEmpty'
        ),
             'yard_kept' => array(
            'rule' => 'notEmpty'
        ),
             'rent_on_time' => array(
            'rule' => 'notEmpty'
        )
        
    );
    
  public function isOwnedBy($tenant, $user) {
    return $this->field('id', array('id' => $tenant, 'user_id' => $user)) !== false;
}  

}