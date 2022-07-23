<?php
    session_start();
    require_once ('component.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/aboutus.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>About -Your Books</title>
</head>
<body>
  <div class="about-section">
    <div class="navbar">
      <nav>
        <a href="#"><img src="../images/logo.png" class="logo"></a>
          <div class="content">
          <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="#">About Us</a></li>
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
              }
              ?>
            </div>
      </nav>
    </div>
  <h1>About Our Books</h1>
  <p>“The person, be it gentleman or lady, who has not pleasure in a good novel, must be intolerably stupid.”
    ― Jane Austen, Northanger Abbey</p>
    <br><br><br>
</div>
<br><br>
<h2 style="text-align:center">Our Team Members</h2><br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://img.freepik.com/free-vector/cute-swag-polar-bear-with-hat-gold-chain-necklace-cartoon-illustration-flat-cartoon-style_138676-2719.jpg?w=2000" alt="Prajwol" style="width:100%">
      <div class="container">
        <h2>Prajwol Ghimire</h2>
        <p class="title">Student</p><br>
        <p><b>Details:</b>Currently on 2nd semester studing software engineering in NCIT.</p>
        <p><b>Email:</b> prajwol.201723@ncit.edu.np</p><br>
        <p><a href="https://github.com/prajwolq"><button class="button" ><i class="fa fa-github"> </i>  Github </button></a></p><br>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://st2.depositphotos.com/1793519/5479/i/450/depositphotos_54794153-stock-photo-girl-holding-pink-heart.jpg" alt="Bishnu" style="width:100%">
      <div class="container">
        <h2>Bishnu Timilsena</h2>
        <p class="title">Student</p><br>
        <p><b>Details:</b>Currently on 2nd semester studing software engineering in NCIT.</p>
        <p><b>Email:</b> bishnu.201743@ncit.edu.np</p><br>
        <p><a href="https://github.com/BishnuTimilsena"><button class="button" ><i class="fa fa-github"> </i>  Github </button></a></p><br>
      </div>
    </div>
  </div>
  

  <div class="column">
    <div class="card">
      <img src="https://png.pngtree.com/png-clipart/20191120/ourlarge/pngtree-turban-boy-cartoon-png-image_2000005.jpg" alt="Sandesh" style="width:100%">
      <div class="container">
        <h2>Sandesh Adhikari</h2>
        <p class="title">Student</p><br>
        <p><b>Details:</b>Currently on 2nd semester studing software engineering in NCIT.</p>
        <p><b>Email:</b> sandesh.201730@ncit.edu.np</p><br>
        <p><a href="https://github.com/sandesh-AD"><button class="button" ><i class="fa fa-github"> </i>  Github </button></a></p><br>
      </div>
    </div>
  </div>
</div>
</body>
</html>