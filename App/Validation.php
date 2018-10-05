<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\App;

class Validation {
    
    public $data = [];
    
    public $validation_rules = [ "required" ,"email", "min", "max"];
    
    public $rules = []; 
    
    
    public $wrongField = null;
    
    public function create ($data, $rules) {
        
        $this->data  = $data;
        
        $this->rules = $rules;
       
    }
    
    public function validate( $trans) {
        $counter = 0;
        $result = true;
        foreach($this->rules as $key=>$value) {
            $validation_arr = explode("|",$value);
            foreach($validation_arr as $v_arr ) {
                $param_arr = explode(":",$v_arr);
               
                if(in_array($param_arr[0], $this->validation_rules)){
                   
                    foreach($param_arr as $p_arr) {
                        
                        if(isset($param_arr[0]) && $p_arr == "required") {
                           
                           if(!$this->required($this->data[$key])) {
                               $result = false;
                               $this->wrongField = $trans . '.' .$key . "_required";
                               break;
                               
                               
                           }
                        }
                        
                        if(isset($param_arr[0]) && $p_arr == "email") {
                           
                            if(!$this->email($this->data[$key])) {
                                $result = false;
                                $this->wrongField = $trans . '.' .$key . "_email";
                                break;
                                
                            }
                        }
                        
                        
                        if(isset($param_arr[0]) && isset($param_arr[1]) && $p_arr == "min") {
                            
                            if(!$this->min($this->data[$key],$param_arr[1])) {
                                
                                $result = false;
                                $this->wrongField = $trans . '.' .$key . "_min";
                                break;
                                
                               
                            }
                        }
                    }
                }
            }
            $counter++;
        }

        return $result;
    }
    
    public function required ($value) {
        if(!empty($value) && $value != "") {
            return true;
        }
        return false;
    }
    
    public function min($value, $min) {
        
        if(strlen($value) >= $min) {
            return true;
            
        }
       
        return false;
    }
    
    public function email ($value) {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
}