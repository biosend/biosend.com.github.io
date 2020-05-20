<?php
   include("connect.php");
   $sql = mysqli_query($link, 'SELECT `id`, `Title`, `About`, `datatime` FROM `news`');
   while ($result = mysqli_fetch_array($sql)) {
     for ($page=0; $result['id'] != $page; $page++) { 
          $pages = array($result['id']);//берём в список
          $numpage = array_pop($pages);//получаем последние значение
          $idnumpage = $numpage;//сколько всего
         }
       }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Форма</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="shortcut icon" href="img/logo.icon" type="image/x-icon">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
   </head>
   <body>
      <?php require "blocks/header.php" ?>
      <div class="container mt-4">
         <h3 class="mb-5">Наши новости</h3>
      </div>
      <div class="container mt-4" id="content">
         <h6 >Общее количество записей <?php echo $idnumpage; ?></h6>
         <div class="d-flex flex-wrap">
            <?php
               for($i = 1; $i <= $numpage; $i++):
                ?>
            <div class="card mb-4 shadow-sm">
               <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Тема: <?php
                     $sql = mysqli_query($link, 'SELECT * FROM news ORDER BY datatime DESC');
                        while ($result = mysqli_fetch_array($sql)) {
                            if($result['id'] == $i){
                             echo "{$result['Title']}";
                            }
                        }
                                           ?></h4>
               </div>
               <div class="card-body">
                  <ul class="list-unstyled mt-3 mb-4">
                     <li><?php
                        $sql = mysqli_query($link, 'SELECT * FROM `news` ORDER BY `id` DESC');
                        while ($result = mysqli_fetch_array($sql)) {
                            if($result['id'] == $i){
                             echo "{$result['About']}";
                            }
                        }
                                              ?></li>
                     <li><br></li>
                     <li><br></li>
                     <li><br></li>
                     <! -- не хотел подключать CSS --> 
                     <li>
                        <div class="card-header">
                           <p><img src="img/data/data.png" alt="data" width="15px;"> Было опубликовано в <?php 
                              $sql = mysqli_query($link,'SELECT * FROM news ORDER BY datatime DESC');
                              while ($result = mysqli_fetch_array($sql)) {
                              if($result['id'] == $i){
                              echo "{$result['datatime']}";
                              }
                              }
                              ?></p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <?php endfor; ?>
         </div>
         <?php require "blocks/footer.php" ?>
      </div>
   </body>
</html>