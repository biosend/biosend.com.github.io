<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING); 
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
/* берём данные */

$pass = md5($pass."ghjsfkld2345");//соль

$mysql = new mysqli('localhost', 'root', 'root', 'register-bg');


$result = $mysql ->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
/* проверка */
if(count($user) == 0) {
    echo "Такой пользователь не найден!";
    exit();
}


setcookie('user', $user['name'], time() + 3600 * 24 * 365, "/");
/* Устанавливаем куки*/

$mysql->close();
$user = mysqli_fetch_assoc($result);


    header('Location: profile.php');
exit();
  
?>
