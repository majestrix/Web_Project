<?php
session_name("result");
session_start();

$dbhost="localhost";
$dbname="c65_Noodles";
$dbuser="c65_Noodles";
$dbpass="comp334!";
$db = new PDO("mysql:host=$dbhost;dbname=$dbname;",$dbuser, $dbpass);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
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
        else
        $_SESSION['err'] = "Invalid username/password";
    }
    else
    {
        $_SESSION['err'] = "Invalid username/password";
    }

    header("Location: ../index.php");
}
?>