<?php
  $host = 'localhost';  // Хост, у нас все локально
  $user = 'root';    // Имя созданного вами пользователя
  $pass = 'root'; // Установленный вами пароль пользователю
  $db_name = 'news';   // Имя базы данных
  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
  $sql = mysqli_query($link, 'SELECT `id`, `Title`, `About` FROM `news`ORDER BY $sorting');
  $sorting = $_GET["sort"];
switch ($sorting) {
  case 'new-sort':
      $sorting = 'datatime DESC';
      $sort_name = 'Новинка';
    break;
  default:
   $sorting = 'fsdfgsdfgsdfh';
   $sort_name = 'sdfsadfsdfg';
    break;
}

  // Ругаемся, если соединение установить не удалось
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>
