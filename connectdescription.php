<?php
    /*Здесь я пыталься сделать описане к профилю*/
    $connect = mysqli_connect('localhost', 'root', 'root', 'discription-profile');

    if (!$connect) {
        die('Error connect to DataBase');
    }