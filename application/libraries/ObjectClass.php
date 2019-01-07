<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Object
 *
 * @author buresova_michaela
 */
class ObjectClass {
    //put your code here
    
    var $status;
    var $value;
    var $message;
    
    function __construct() {
        
    }
    
    function setParams($status, $value, $message) {
        $this->message = $message;
        $this->status = $status;
        $this->value = $value;
       
        
        
        
        
    }
    
   
}
