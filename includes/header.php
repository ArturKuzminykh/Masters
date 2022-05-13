<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RBIM</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/BBB.css" rel="stylesheet">
</head>

<body>

    <div class="upper_menu">
    
      <nav>
      <ul>
        <li><a href="index.php">WELCOME TO R-BIM</a></li>
        <li><a href="#">MANUAL</a></li>
        <?php
        if (isset($_SESSION["useruid"])) {
          echo '<li><a href="viewer.php">UPLOAD & VIEW THE PROJECT</a></li>';
          echo '<li><a href="validation.php">VALIDATE & SEND TO THE MARKET</a></li>';
          echo '<li><a href="includes/logout.inc.php">LOG OUT</a></li>';
        } else {
          echo '<li><a href="signup.php">SIGN UP</a></li>';
          echo '<li><a href="login.php">LOG IN</a></li>';
        }
        ?>
      </ul>
      </nav>
      <br><br><br>
    </div>
  