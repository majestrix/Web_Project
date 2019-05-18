<?php
    session_start();
    $dbhost="localhost";
    $dbname="c59_Noodles";
    $dbuser="c59_Noodles";
    $dbpass="comp334!";
    try{

        $db = new PDO("mysql:host=$host;dbname=$dbname;",$dbuser,$dbpass);
        $values = array();
        $setString = "";
        print_r($_POST);
        forEach($_POST as $key => $value){
            if($value)
            {
                $setString .= "$key=?,";
                array_push($values,$value);
            }
        }
        $setString = rtrim($setString,',');
        $title = $_POST['title'];
        $sql = "UPDATE picnic SET $setString WHERE title='$title'";
        $stmt = $db->prepare($sql);
        print_r($stmt);
        $res = $stmt->execute($values);
        print_r($res);
        if($res)
        {
            echo "Inserted";
        }
        else
            echo "Error:(";
    }
    catch(Exception $e){
        var_dump($e->getMessage());
    }
    header("Location: ../manager.php");
?>