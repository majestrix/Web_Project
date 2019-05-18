<?php
session_name();
session_start();

$db = new PDO("mysql:host=localhost;dbname=c59_Noodles",'root','');
$user = $_POST['headerUsername'];
$pass = md5($_POST['headerPassword']);
$res = $db->query("SELECT * FROM customer WHERE username='$user'");
if($res)
{
    $res = $res->fetch();
    if($res['pass'] == $pass)
    {
        $_SESSION['user'] = $res;
        if($res['username'] == "comp334")
            $_SESSION['manager'] = 1;
    }
}
else
{
    $_SESSION['err'] = "Invalid username/password";
}

header("Location: ../index.php");
?>