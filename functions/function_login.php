<?php
session_name("result");
session_start();

$dbhost="localhost";
$dbname="c59_Noodles";
$dbuser="c59_Noodles";
$dbpass="comp334!";
$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);

$user = $_POST['username'];
$pass = md5($_POST['password']);
$test = 'amjad';
$res = $db->query("SELECT * FROM customer WHERE username='$user'");
if($res)
{
    $res = $res->fetch();
    if($res['pass'] == $pass)
    {
        $_SESSION['user'] = $res;
    }
}
else
{
    $_SESSION['err'] = "Invalid username/password";
}

header("Location: ../index.php");

function build_pdo_query($string, $array) {
    //Get the key lengths for each of the array elements.
    $keys = array_map('strlen', array_keys($array));

    //Sort the array by string length so the longest strings are replaced first.
    array_multisort($keys, SORT_DESC, $array);

    foreach($array as $k => $v) {
        //Quote non-numeric values.
        $replacement = is_numeric($v) ? $v : "'{$v}'";

        //Replace the needle.
        $string = str_replace($k, $replacement, $string);
    }

    return $string;
}
?>