<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP веб сайт</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
        <h3>Контактная форма</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Введите вопрос"></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
    </div>
    <?php require "blocks/footer.php" ?>
</body>

</html>
