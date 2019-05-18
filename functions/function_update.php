<?php
    session_start();
    $dbhost="localhost";
    $dbname="c59_Noodles";
    $dbuser="root";
    $dbpass="";
    try{
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
        $values = array();
        $setString = "";
        print_r($_POST);
        forEach($_POST as $key => $value){
            if($key == "confirmPassword")
                break;
            if($value)
            {
                $setString .= "$key=?,";
                if($key != "password")
                    array_push($values,$value);
                else
                    array_push($values,md5($value));
            }
        }
        $setString = rtrim($setString,',');
        $user = $_SESSION['user']['username'];
        $sql = "UPDATE customer SET $setString WHERE username='$user'";
        $stmt = $db->prepare($sql);
        print_r($stmt);
        $res = $stmt->execute($values);
        print_r($res);
        if($res)
        {
            echo "Inserted";
            if($_POST['username'])
                $user = $_POST['username'];
            else
                $user = $_SESSION['user']['username'];
            $sql = "SELECT * FROM customer WHERE username='$user'";
            $res = $db->query($sql);
            $res = $res->fetch();
            $_SESSION['user'] = $res;
            print_r($_SESSION);
        }
        else
            echo "Error:(";
    }
    catch(Exception $e){
        var_dump($e->getMessage());
    }
    header("Location: ../index.php");
?>