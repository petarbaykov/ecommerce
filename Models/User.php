<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\Models;

use Ecommerce\Models\BaseModel;

class User extends BaseModel {
    
    public $table = "users";
    
    public function __construct() {
        parent::__construct($this->table);
    }
    
    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE email = ? ");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
    
    public function insert($data) {
        unset($data['_token']);
        $data['password'] = md5($data['password']);
        return parent::insert($data);
    }
} 
