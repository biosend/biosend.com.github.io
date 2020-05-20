<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Форма</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <?php require "blocks/header.php" ?>
      <div class="container mt-4">
         <?php
            if($COOKIE['user'] == ''):
            ?>
         <div class="row">
            <div class="col">
               <h3>Форма регистрации</h3>
               <form action="check.php" method="post">
                  <div class="input-group mb-2">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Почта: </div>
                     </div>
                     <input type="text" class="form-control" name="login" id="login">
                  </div>
                  <div class="input-group mb-2">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Login: </div>
                     </div>
                     <input type="text" class="form-control" name="name" id="name">
                  </div>
                  <div class="input-group mb-2">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Password: </div>
                     </div>
                     <input type="password" class="form-control" name="pass" id="pass">
                  </div>

                  <button class="btn btn-success" type="submit">Зарегестрировать</button>
                  <h6>Уже есть аккаунта? Авторизируй его <a href="login.php">здесь!</a></h6>
               </form>
            </div>
         </div>
         <?php else:?>
         <p>Привет <?=_COOKIE['user']?>. Чтобы выйти нажмите здесь <a href="exit.php"></a></p>
         <?php endif;?>
         <?php require "blocks/footer.php" ?>
      </div>
   </body>
</html>