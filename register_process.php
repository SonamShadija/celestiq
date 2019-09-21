<?php
session_start();
include 'config.php';

if(isset($_POST['reg_btn'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $acc_created = date("d-m-Y");

    $sql = "select * from user where email = '".$email."'";

    $res = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($res);

    if(mysqli_num_rows($res)>0){
        $_SESSION['msg'] = "Email already exists";
        header("Location: register.php");

    }
    else{
        if($password == $cpassword){
            
            $sql = "insert into user (fname,lname,email,contact,password,account_created) VALUES ('".$fname."','".$lname."','".$email."','".$contact."','".md5($password)."','".$acc_created."')";

            mysqli_query($conn,$sql);

            header("Location: index.php");

            exit(0);
            
        }
        else{
            $_SESSION['msg'] = "Passwords does not match!";
            header("Location: register.php");
        }
    }
    
}