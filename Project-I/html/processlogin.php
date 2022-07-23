<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
    $useremail=$_POST['user_email'];
    $userpassword=$_POST['user_password'];
    if(empty($useremail) || empty($userpassword)){
        header('Location: login.php?error=All fields are required');
    }
    else{
        include_once '../db/connect.php';
        $db = mysqli_select_db($connection, 'booksdata');
        $query="SELECT * FROM udata WHERE uname='$useremail' || email='$useremail'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if(md5($userpassword)==$row['upassword']){
                    $_SESSION['user']=$_POST['user_email'];
                    header('Location: ../index.php?error= Welcome,' . '&name=' . $useremail);
            }
            else{
                header('Location: login.php?error=Invalid password');
            }
        }
        else{
            header('Location: login.php?error=Invalid Email or username');
        }
    }
}
else{
    header('Location:login.php');
}