<?php
    session_start();
    $q = $_GET['q'];
    $dbhost="localhost";
    $dbname="c59_noodles";
    $dbuser="root";
    $dbpass="";
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
    $res = $db->query("SELECT * FROM picnic WHERE ref='$q'");
    $res = $res->fetch(PDO::FETCH_ASSOC);
    $myJSON = json_encode(utf8ize($res));

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

?>