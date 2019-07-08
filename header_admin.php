<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Page Property</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

<a class="navbar-brand" href="main.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="index.php">Property List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item">
        <a class="nav-link" href="phn.php">Contact</a>
      </li>
    </ul>
    <div class="main-wrapper">
      <ul>
        <li><a href="indexlog.php"></a>
          
        </li>
      </ul>
      <div class="nav-login">
        <?php
          if(isset($_SESSION['a_id'])){
            echo '<form action="include/logout.inc.php" method="POST">
                <button type="submit" name="submit">Logout</button>
              </form>';

          }

        ?>

      </div>
      
    </div>
  </div>
</nav>
