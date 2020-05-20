<?php
$login = filter_var(trim($_POST['login']) , FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']) , FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']) , FILTER_SANITIZE_STRING);
/* берём данные */

if (mb_strlen($login) < 5 || mb_strlen($login) > 90)
{
    echo "логин большой или слишком маленький";
    exit();
}
else if (mb_strlen($name) < 3 || mb_strlen($login) > 50)
{
    echo "name большой или слишком маленький";
    exit();
}
else if (mb_strlen($pass) < 3 || mb_strlen($login) > 50)
{    
    echo "pass большой или слишком маленький";
    exit();
}
/*Проверка*/
$pass = md5($pass . "ghjsfkld2345");//соль

$mysql = new mysqli('localhost', 'root', 'root', 'register-bg');

$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
$mysql->close();
/*Перенос в бд*/
header('Location: login.php');
exit();

?>
