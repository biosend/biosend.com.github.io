<?php
         if($_COOKIE['user'] == 'admin'):
         header('Location: http://localhost/login.php');
         else:
         	header('Location: http://localhost/index.php');
         endif;
         ?>