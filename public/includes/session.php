<?php 
    if(!isset($_SESSION['userName'])){
        header('Location: login');
    }
?>
