<?php
<<<<<<< HEAD
    session_start();
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: ../index.php");
=======
session_start();
session_destroy();
$_SESSION = [];
header("Location: {$_SERVER['HTTP_REFERER']}");
>>>>>>> final
?>