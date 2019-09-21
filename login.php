<?php
session_start();
include 'config.php';

if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $last_login = date("d-m-Y h:i:s");

    $sql = "select * from user where email = '".$email."'";

    $res = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($res);
   
    if(!empty($data)){
        if($password == $data['password']){
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_login'] = "yes";
            $_SESSION['fname'] = $data['fname'];
            $id = $data['id'];

            $sql = "update user set last_login = '".$last_login."' where id=".$id;

            mysqli_query($conn,$sql);

            header("Location: homepage.php");

            exit(0);
            
        }
        else{
            $_SESSION['msg'] = "Invalid credentials. Try again!";
            header("Location: index.php");
        }
    }
    else{
        $_SESSION['msg'] = "Account does not exist";
        header("Location: index.php");
    }
    
}