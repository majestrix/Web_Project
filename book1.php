
<!--<?php
    /*session_name("picnic");
    session_start();
    if(!isset($_SESSION['picnic'])){
        header("Location: index.php");
    }*/
?> -->
<?php require_once("template/generalHeader.php"); ?>
    <style type="text/css">
          <?php require_once("css/header.css"); ?>
          <?php require_once("css/book.css"); ?>
          <?php require_once("css/footer.css"); ?>
    </style>
        <?php
        $dbhost="localhost";
        $dbname="c59_Noodles";
        $dbuser="root";
        $dbpass="";
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
        if(!$db ) {
            die("Could not connect to database");
        }
        $ref = 1000000003;
        $str = "SELECT `price` FROM `picnic` WHERE `ref` = '$ref'";
        $result = $db->query($str);
        $price = 0;
        while ($row = $result->fetch()){
            $price = $row['price'];
        }
        $total = 2 * $price;
        echo "<script type='text/javascript'>
        confirm('Total: $total');
        
            window.Location.replace(\"http:index.php\");
        </script>";
              
        ?>
           
 
