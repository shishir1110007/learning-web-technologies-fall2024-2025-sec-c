<?php
session_start();
require_once('../model/usermodel.php');
if(isset($_REQUEST['submit'])){
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    
    if($name == null || empty($password)){
        echo "Null username/ password";
    
    }else {
        $status = login($name, $password);
        if($status){
            setcookie('status', 'true', time()+3000, '/');
            header('location: ../view/home.php');
        }else{
            echo "Invalid user!";
        }
    }

}else{
    header('location: ../view/login.html');
}
?>