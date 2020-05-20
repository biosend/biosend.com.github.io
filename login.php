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
         <div class="row">
            <div class="col">
               <h3>Форма авторизации</h3>
               <form action="auth.php" method="post">
                  <div class="input-group mb-2">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Почта: </div>
                     </div>
                     <input type="text" class="form-control" name="login" id="login">
                  </div>
                  <div class="input-group mb-2">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Password: </div>
                     </div>
                     <input type="password" class="form-control" name="pass" id="pass">
                  </div>
                  <button class="btn btn-success" type="submit">Авторизоваться</button>
                  <h6>Еще нет аккаунта? Создай его <a href="reg.php">здесь!</a></h6>
               </form>
            </div>
         </div>
         <?php require "blocks/footer.php" ?>
      </div>
   </body>
</html>