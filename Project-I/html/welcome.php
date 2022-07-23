
<?php
$error = '';
if (isset($_GET['error'])) {
    $name = $_GET['name'];
}
    $db = mysqli_select_db($connection, 'booksdata');
    $query="SELECT * FROM udata WHERE usname='$usname'";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home -Your Books</title>
        <link rel="stylesheet" type="text/css" href="./css/index.css">
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <nav>
                    <a href="#"><img src="images/logo.png" class="logo"></a>
                    <div class="content">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="html/contact.php">Contact</a></li>
                        <li><a href="html/aboutus.php">About Us</a></li>
                    </ul>
                    </div>
                    <div>
                        <!-- <a href="html/login.php"><input class="btn_login" type="submit" name="login" value="login"></input></a>
                        <a href="html/signup.php"><input class="btn2_signup" type="submit" name="login" value="Sign Up"></input></a> -->
                        <div class="welcome_user"><b style="color:red;"> Welcome, <a href="#"><?php echo $name ?></a>
                    </div>
                </nav><br><br><br>
                <div class="titled"> 
                    <center><h1>Find Your Favorite books and share your knowlege to others!</h1></center>
                </div><br><br>
                <div class="search">
                    <form action="post" target="process.php" class="search-bar">
                        <input type="text" placeholder="Search Books..." name="search">
                        <button type="submit"><img src="images/search.png"></button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>