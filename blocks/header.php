<link href="img/name/icon.icon" rel="icon">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Jekyll v4.0.1">


<header class="fixed-top header-transparent">
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
   <h5 class="my-0 mr-md-auto font-weight-normal">bioSend</h5>
   <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="index.php">Главная</a>
      <a class="p-2 text-dark" href="about.php">Контакты</a>
      <a class="p-2 text-dark" href="newspage.php">Новости</a>
      <?php if($_COOKIE['user'] == 'admin'): ?>
      <a class="p-2 text-dark" href="phpmyadmin/">Перейти в phpmyadmin</a>
      <?php else: ?>
      <a class="p-2 text-dark" href="profile.php"></a>
      <?php endif; ?>
   </nav>
   <?php
      if($_COOKIE['user'] != ''):
      ?>
   <div class="btn-group">
      <a href="profile.php"></a>
      <a  class="btn btn-outline-primary" href="profile.php">User, <?php echo $_COOKIE['user'] ?></a>
      <a type="button" class="btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
      <div class="dropdown-menu">
         <div class="card-header">
            <a class="bth" href="exit.php">Выйти</a>
         </div>
      </div>
   </div>
   <?php else: ?>
   <a class="btn btn-outline-primary" href="login.php">Sign up</a>
   <?php endif; ?>
</div>
  </header><!-- End Header -->
  <br><br><br>
  <br><br><br>