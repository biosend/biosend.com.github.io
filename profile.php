<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP веб-сайт</title>
      <meta charset="UTF-8">
      <title>Форма</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="shortcut icon" href="img/logo.icon" type="image/x-icon">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
   <?php require "blocks/header.php" ?>
   <div class="container">
       <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Name: <span class="text-muted"><?php echo $_COOKIE['user'] ?></span></h2>
            <p class="lead">Login: @<?php echo $_COOKIE['user']; ?></p>
            <a href="#"><?php echo $_SESSION['user']; ?></a>
            <p style="font-size: 30px;">Описание: <?php echo $_SESSION['user']['description']; ?></p>
            <form action="vendor/signup.php" method="post">
              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5" placeholder="Введите описание"></textarea><br>
           
              <button type="sumbit" class="btn">Отправить описание</button>
            </form>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/profile/avatar.png" data-holder-rendered="true" style="width: 250px; height: 250px;">
            <h6>Что бы выйти нажмите <a href="exit.php">здесь!</a></h6>
          </div>
        </div>

   </div>       

   <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
 <?php require "blocks/footer.php" ?>
  </footer><!-- End Footer --></body>
</html>