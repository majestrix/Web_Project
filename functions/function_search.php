<?php
session_name("result");
session_start();

$_SESSION['result'] = false;
$db = new PDO("mysql:host=localhost;dbname=c59_Noodles",'root','');
$q = $_GET['q'];
if($q !== "none")
    $sql = "SELECT * FROM picnic WHERE title LIKE '%".$q."%'";
else
    $sql = "SELECT * FROM picnic";
$res = $db->query($sql);   
    if($res)
    {
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        // echo json_encode(utf8ize($data));
        $_SESSION['result'] = true;
        // $_SESSION['result'] = $res->fetchAll();
        $myJSON = json_encode(utf8ize($data));
    }
echo $myJSON;

function utf8ize($d) {
    if (is_array($d)) 
        foreach ($d as $k => $v) 
            $d[$k] = utf8ize($v);

     else if(is_object($d))
        foreach ($d as $k => $v) 
            $d->$k = utf8ize($v);

     else 
        return utf8_encode($d);

    return $d;
}
?>