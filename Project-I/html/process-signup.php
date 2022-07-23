<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $upassword = $_POST['user_password'];
    $uname = $_POST['user_uname'];
    if (empty($name) || empty($email) || empty($upassword) ) {
        header('Location: signup.php?error= * All fields are required' . '&name=' . $name . '&email=' . $email . '&uname=' . $uname);
    } else {
        include_once '../db/connect.php';
        $db = mysqli_select_db($connection, 'booksdata');
        $query = "SELECT * FROM udata WHERE uname = '$uname'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) > 0) {
            header('Location: signup.php?error= * Choose a unique username' . '&name=' . $name . '&email=' . $email . '&uname=' . $uname);
        } else {
            $upassword = md5($upassword);
            $query = "INSERT INTO udata (uname, email, upassword, usname) VALUES ('$uname', '$email', '$upassword', '$name')";
            $result = mysqli_query($connection, $query);
            if ($result) {
                // echo("done");
                header('Location: login.php?error=You can login Now!');
            } else {
                header('Location: signup.php?error=Something went wrong' . '&name=' . $name . '&email=' . $email . '&uname=' . $uname);
            }
        }
    }
} else {
    header("Location: signup.php");
}