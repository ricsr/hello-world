<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("DBUtils.php");
class UserModel{
    var $username;
    var $password;
    public function setUser($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    
    public function verifyUser(){
        $dbUtil = new DBUtils();
        $value = $dbUtil->verifyUser($this->username, $this->password);
        if($value){
            $_SESSION["id"] = $this->username;
            return "Logged in sucessfully";
        }else{
            return "Log in failed. Please try with proper user.";
        }
        
        return $value;
    }
}
?>