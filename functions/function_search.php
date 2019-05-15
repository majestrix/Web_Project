<?php
session_start();

$db = new PDO("mysql:host=localhost;dbname=noodles",'root','');
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
                $hint.="<span>".$item['title']."</span>";
                $hint.="<input type='hidden' value='".$item['title']."'>";
                $hint.="</div>";
        }
    }
}
    echo $hint
?>