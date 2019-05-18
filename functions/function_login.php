<?php
session_name();
session_start();

$dbhost="localhost";
$dbname="c59_noodles";
$dbuser="root";
$dbpass="";
$db = new PDO("mysql:host=$dbhost;dbname=$dbname;",$dbuser, $dbpass);

print_r($_POST);
$user = $_POST['username'];
$pass = md5($_POST['password']);
$test = "laith";

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
print_r($_SESSION);
header("Location: ../index.php");
?>