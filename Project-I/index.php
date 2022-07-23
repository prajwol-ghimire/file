<?php
//$database= new CreateDb("booksdata","bookinfo");
$full_name = '';
$error = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    $full_name = $_GET['name'];
}
    session_start();
    require_once ('html/component.php');
    require_once ('db/connect.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home -Your Books</title>
        <link rel="stylesheet" type="text/css" href="./css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <?php
                            if (!isset($_GET['error'])) {
                                notset();
                            }
                        ?>       
                    </div>
                    <?php
                    if (isset($_GET['error'])) {
                        set($error,$full_name);
                    }
                    ?>
                </nav><br><br><br>
                <div class="titled"> 
                    <center><h1>Find Your Favorite books and share your knowlege to others!</h1></center>
                </div><br><br>
                <div class="search">
                    <form action="post" target="html/process.php" class="search-bar">
                        <input type="text" placeholder="Search Books..." name="search">
                        <button type="submit"><img src="images/search.png"></button>
                    </form>
                </div>
                <?php
                if (isset($_GET['error'])) {
                        upload();
                    }
                ?>
            </div>
        </div>
        <?php
            $result=getdata();
            while($row= mysqli_fetch_assoc($result)){
                component($row['bookname'],$row['author'],$row['book_images']);
            }
        ?>
    </body>
</html>

<!-- // <div class=\"file_upload\"><img src=\"images/upload.jpg\" width=\"50px\" height=\"50px\">
    // <p>UPLOAD FILE</p>
    // </div> -->