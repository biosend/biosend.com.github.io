<?php
  $mysql = new mysqli('localhost', 'root', 'root', 'news');


  if($mysql){
      echo "222";
  }
  $select_db = mysql_select_db('news');

  $select = mysql_query("SELECT * FROM `news`");
      if($select){
      echo "111";
  }
?>
