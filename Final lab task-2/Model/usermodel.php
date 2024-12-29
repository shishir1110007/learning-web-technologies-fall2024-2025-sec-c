<?php

function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'phpdb');
    return $conn;
}

function login($name, $password){
    $conn = getConnection();
    $sql = "select * from users where name='{$name}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count ==1 ){
        return true;
    }else{
        return false;
    }
}
function addUser($name, $password, $email,$number){
    $conn = getConnection();
    $sql = "insert into users VALUES('', '{$name}', '{$password}', '{$email}','{$number}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

?>