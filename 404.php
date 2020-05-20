<?php
header("HTTP/1.0 404 Not Found");
?>
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
    <div class="container mt-20">
        <div class="row mt-20">
            <div class="col mt-20">
             <h1>ОШИБКА 404</h1>
              <h1>ТАКОЙ СТРАНИЦЫ НЕТ</h1>
              <br>
              <h4>перейти на <a href="index.php">главную</a> </h4>
            </div>
        </div>
        <?php require "blocks/footer.php" ?>
    </div>
</body>

</html>
