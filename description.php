<?php
    /*Это так и не заработало*/
    session_start();
    require_once 'connectdescription.php';
    
    $description = $_POST['description'];
    $userp = $_COOKIE['user'];

    if ($description == ''):
        echo "Введите описание";
    	exit();
    else:

    mysqli_query($connect, "INSERT INTO `description` (`id`, `description`, `user`) VALUES (NULL, '$description', '$userp')");

    $check_user = mysqli_query($connect, "SELECT * FROM `description` WHERE `description` = '$description' AND `user` = '$userp'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "description" => $user['description'],
        ];
        
        header('Location: profile.php');

    }
     endif;
    ?>
