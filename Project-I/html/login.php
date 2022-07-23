
<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
} else {
    $error = '';
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/logincss.css">
    <title>Signup -Your Books</title>
</head>
<body>
<div class="container">
    <p class="login-text"><b>Sign in at Your books</b></p>
    </br> “You only live once, but if you do it right, once is enough.” ― Mae West </br>
    </br></br>
    <div class="login-social">
        <a href="#" class="google-plus" data-onsuccess="onSignIn"><i class="fa fa-google-plus"></i> Log in with Google</a>
    </div>
    <hr>
    </br></br>
    <center><h2><p class="error" style="color:red;"><?php echo $error ?></p> </br></h2></center>
    <form class="login-email" action="processlogin.php" method="POST">
        <center><b><h2><p class="login-txt">Signin with email</p></h2></b></center></br>
        <div class="input-group">
            <input type="text" placeholder="Username or Email"  name="user_email" >
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="user_password" >
        </div>
        <a href="p_forget">Forgot your password?</a><br><br>
        <input type="checkbox" required> Stay logined in <br><br>
        Our privacy policy can be found <a href="#">here </a><br><br>
        <div class="input-group">
            <button class="btn" name="signup" type="submit">Login</button>
        </div>
    </form>
</div>
</body>
</html>

<?php
}
?>