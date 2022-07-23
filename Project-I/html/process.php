<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $useremail=$_POST['user_email'];
    $userpassword=$_POST['user_password'];
    if(empty($useremail) || empty($userpassword)){
        header('Location: login.php?error=All fields are required');
    }
    else{
        // include_once '../db/connect.php';
        $db = mysqli_select_db($connection, 'social_network');
        $query="SELECT * FROM booksdata WHERE user_email='$useremail'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if(md5($userpassword)==$row['user_password']){
                    session_start();
                    $_SESSION['user_id']=$row['user_id'];
                    header('Location: home.php');
            }
            else{
                header('Location: login.php?error=Invalid password');
            }
        }
        else{
            header('Location: login.php?error=Email not registered');
        }
    }
}
else{
    header('Location:login.php');
}