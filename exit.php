<?php

   setcookie('user', $user['name'], time() - 3600, "/");//обнуляет куки
   header('Location: index.php');
?>