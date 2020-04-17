<?php
    session_start();

    if(!$_SESSION['login'] && !$_SESSION['dateLogin'] ) {
        header('Location: ../../../index.php');
        exit();
    }
?>