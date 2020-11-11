<?php
    $db_server='localhost';
    $user_name='root';
    $password='';
    $db_name='Galle-MIS';

    $connection=mysqli_connect($db_server,$user_name,$password,$db_name);

    if(mysqli_connect_error()){
        echo 'Database connection failed!';
    }
?>