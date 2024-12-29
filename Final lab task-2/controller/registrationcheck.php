<?php
    // session_start();
    require_once('../model/usermodel.php');
    if(isset($_REQUEST['submit'])){
        
        $name = trim($_POST['name']);
        $password = trim($_REQUEST['password']);
        $email = trim($_REQUEST['email']);
        $number = trim($_REQUEST['number']);

        if($name == null || empty($password )|| empty($email)|| empty($number)){
            echo "Null username/password/email!";

        }else {
            // $user = ['name'=> $name, 'password'=> $password, 'email'=> $email, 'number'=>$number];
            // $_SESSION['user'] = $user;
            // header('location: login.html');
            $status = addUser($name, $password, $email,$number);
            if($status){
                header('location: ../view/login.html');
            }else{
                header('location: ../view/reg.html');
            }
        }
    }else{
        header('location: ../view/reg.html');
    }

?>