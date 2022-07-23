<?php
$error = '';
$name = '';
$email = '';
$uname = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $uname = $_GET['uname'];
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
<input class="btn_login" type="submit" name="login" value="login"></input>
    <div class="container">
        <p class="login-text"><b>Sign up at Your books</b></p>
        </br> “You only live once, but if you do it right, once is enough.” ― Mae West </br>
        </br></br>
        <div class="login-social">
            <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=579511247654-r8cg4dkl2acvg5omt5qb29hli0tjcmt2.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FProject-I%2Fwelcome.php&state&scope=email%20profile&approval_prompt=auto" class="google-plus" data-onsuccess="onSignIn"><i class="fa fa-google-plus"></i> Sign Up with Google</a>
        </div>
        <hr>
        </br></br>
        <form class="login-email" action="process-signup.php" method="POST">
            <p class="login-text">Signup with email</p>
            <p class="error" style="color:maroon;"><?php echo $error; ?></p></br>
            <div class="input-group">
                <input type="text" placeholder="Full Name" value="<?php echo $name ?>" name="user_name" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" value="<?php echo $uname ?>" name="user_uname" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" value="<?php echo $email ?>" name="user_email"required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required name="user_password">
            </div>
            <input type="checkbox"> I Accpet all the terms and conditions. <br><br>
            <div class="input-group">
                <button class="btn" name="signup" type="submit">SIGNUP</button>
            </div>
        </form>
    </div>
</body>
</html>

