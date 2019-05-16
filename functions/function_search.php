<?php
session_name("result");
session_start();

$db = new PDO("mysql:host=localhost;dbname=c59_Noodles",'root','');
$q = $_GET['q'];

if(strlen($q) > 0)
{
    $hint = "";
    $res = $db->query("SELECT * FROM picnic WHERE title LIKE '%".$q."%'");
    if($res)
    {
        forEach($res as $item)
        {
                $hint.="<div>";
                $hint.="<a href='#main'><span>".$item['title']."</span></a>";
                $hint.="</div>";
        }
        $_SESSION['search'] = $res; 
    }
    
}
    echo $hint
?>