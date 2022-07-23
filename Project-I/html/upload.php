<?php
if(!$_SERVER['REQUEST_METHOD']=="POST"){
    header('Location:login.php');
}
else{
    $error = '';
    $bookname = '';
    $bookauthor = '';
    $bookdes = '';
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        $bookname = $_GET['bookname'];
        $bookauthor = $_GET['bookauthor'];
        $bookdes = $_GET['bookdes'];
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact -Your Books </title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="navbar">
      <nav>
        <a href="#"><img src="../images/logo.png" class="logo"></a>
          <div class="content1">
          <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="aboutus.php">About Us</a></li>
          </ul>
          </div>
          <div>
              <a href="login.php"><input class="btn_login" type="submit" name="login" value="login"></input></a>
              <a href="signup.php"><input class="btn2_signup" type="submit" name="login" value="Sign Up"></input></a>
          </div>
      </nav>
    </div>  
  <div class="container">
    <div class="content">
      <div class="right-side">
       <span class="error_msg"> <?php echo $error ?></span>
        <div class="topic-text">Add a book review here</div>
        <p>Only add about book that you know ↓ </p>
      <form action="process-upload.php" method="POST" enctype="multipart/form-data">
        <div class="input-box">
          <input type="text" placeholder="Enter book Name" name="book-name" value="<?php echo $bookname ?>"  >
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter book author" name="book-author" value="<?php echo $bookauthor ?>" >
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Description.." name="book-des"><?php echo $bookdes ?></textarea>
        </div>
        <div class="input-box">
            <input type="file" id="img" name="book_file">
        </div>
        <div class="button">
          <button class="button" type="submit" value="Send" >submit</button>
        </div>
      </form>
    </div>
    </div>
  </div>

</body>
</html>

<?php

}

?>