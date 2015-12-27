<?php  session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$controller = new LoginLogoutController();
if(!isset($_SESSION["id"])){
    $controller->login();
}else{
    $controller->logOut();
}


class LoginLogoutController{
    
    public function login(){
            include './View/LoginView.php';
    }
    public function logOut(){
            include './View/LogoutView.php';
            session_unset(); 
            session_destroy(); 
    }
}
?>