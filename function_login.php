<?php
session_start();

$db = new PDO("mysql:host=localhost;dbname=noodles",'root','');
$user = $_POST['username'];
$pass = md5($_POST['password']);
$test = 'amjad';
$res = $db->query("SELECT * FROM login WHERE user='$user'");
if($res)
{
    $res = $res->fetch();
    if($res['pass'] == $pass)
    {
        $_SESSION['user'] = $res['user'];
    }
}
else
{
    $_SESSION['err'] = "Invalid username/password";
}

header("Location: index.php");
// echo $_SESSION['user'];
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