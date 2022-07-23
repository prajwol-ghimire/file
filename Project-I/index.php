<?php
session_start();

$full_name = '';
$error = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    $full_name = $_GET['name'];
}
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
                            if (!isset($_SESSION['user'])){
                                notset();
                            }
                        ?>       
                        <?php
                        if (isset($_SESSION['user'])){
                            echo 'Welcome, ' . $_SESSION['user'];
                            logout();
                        }
                        ?>
                    </div>

                </nav>

                <br><br><br>
                <div class="titled"> 
                    <center><h1>Find Your Favorite books and share your knowlege to others!</h1></center>
                </div>

                <br><br>

                <div class="search">
                    <form action="post" target="html/process.php" class="search-bar">
                        <input type="text" placeholder="Search Books..." name="search">
                        <button type="submit"><img src="images/search.png"></button>
                    </form>
                </div>
                
                <?php
                if (isset($_GET['error'])) {
                        
                    }
                if (isset($_SESSION['user'])){
                    upload();
                }
                ?>
            </div>
        </div>
        <div class="background_text">
        <?php
            $result=getdata();
            if($result){
                while($row= mysqli_fetch_assoc($result)){
                    component($row['bookname'],$row['author'],$row['book_images'],$row['book_description']);
                }
            }
            else
                echo("NO DATA")
        ?>
        </div>

            <!-- <footer class="site-footer">
                <div class="container_foot">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h6>About</h6>
                            <p class="text-justify">ourbooks.com <i>This website is still on underdevelopment </i> This site focus on Advanced book review system which has two perspective both reader and writer on the content.</p>
                        </div>

                        <div class="col-xs-6 col-md-3">
                            <h6>Program and Tools used</h6>
                            <ul class="footer-links">
                            <li><a href="">HTML</a></li>
                            <li><a href="">CSS</a></li>
                            <li><a href="">Java Scripts</a></li>
                            <li><a href="">Java</a></li>
                            <li><a href="">PHP</a></li>
                            <li><a href="">SQL</a></li>
                            </ul>
                        </div>
                        <hr>
                    </div>

                    <div class="container_foot">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12">
                            <p class="copyright-text">Copyright &copy; All Rights Reserved
                            </p>
                            </div>
                            

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <ul class="social-icons">
                                <li><a class="Github" href="#"><i class="fa fa-github"></i></a></li>   
                                </ul>
                            </div>
                        </div>
                    </div>
            </footer> -->


    </body>
</html>

<!-- // <div class=\"file_upload\"><img src=\"images/upload.jpg\" width=\"50px\" height=\"50px\">
    // <p>UPLOAD FILE</p>
    // </div> -->