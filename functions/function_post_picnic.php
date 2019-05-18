<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $setString = "";
        $values = "";
        $dbhost="localhost";
        $dbname="c59_Noodles";
        $dbuser="c59_Noodles";
        $dbpass="comp334!";
        try{
            
            $db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
            $values = array();
            $keys = "";
            $qMarks = "";
            forEach($_POST as $key => $value){
                if($value)
                {
                    $qMarks .= "?,";
                    $keys .= "$key,";
                    array_push($values,$value);
                }
            }
            $keys = rtrim($keys,',');
            $qMarks = rtrim($qMarks,',');
            $sql = "INSERT INTO picnic($keys) values ($qMarks)";
            $stmt = $db->prepare($sql);
            $res = $stmt->execute($values);
            print_r($res);
            if($res)
            echo "Inserted";
            else
            echo "Error:(";
        }
        catch(Exception $e){
            var_dump($e->getMessage());
        }
            ?>
</body>
</html>