<?php require_once('template/generalHeader.php'); ?>
<style>
        <?php require_once('css/header.css'); ?>
        <?php require_once('css/picnic.css'); ?>
        <?php require_once('css/footer.css'); ?>
</style>
        <?php
<<<<<<< HEAD
         $db = new PDO("mysql:host=localhost;dbname=c59_Noodles",'root','');
         $ref = $_GET['ref'];    
         $res = $db->query("SELECT * FROM picnic WHERE ref='".$ref."'")->fetch(PDO::FETCH_ASSOC);
=======
         $dbhost="localhost";
         $dbname="c59_Noodles";
         $dbuser="c59_Noodles";
         $dbpass="comp334!";
         $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
         if(!$pdo ) {
            die("Could not connect to database");
         }
         $ref = $_GET['ref'];    
         $res = $pdo->query("SELECT * FROM picnic WHERE ref='$ref'")->fetch(PDO::FETCH_ASSOC);
>>>>>>> final
        ?>
<article id="main">
        <div id="left">
                <img src="<?php echo $res['src'] ?>">       
        </div>
        <div id="right">
                <h1><?php echo $res['title'] ?></h1>
                <span><?php echo $res['place'] ?></span>
<<<<<<< HEAD
                <div>
                        <span><?php echo "$".$res['price'] ?></span>
                        <button>Book now!</button>
                </div>
        </div>
</article>
<?php require_once('template/footer.php'); ?>
<script src="js/header.js"></script>
=======
                <form action="book.php" method="GET">
                    <div>
                        <input type="text" name="picnic" value="<?php echo $ref ?>" style="display: none">
                        <span><?php echo "$".$res['price'] ?></span>
                        <button type="submit">Book now!</button>
                    </div>
                </form>
        </div>
</article>
<?php require_once('template/footer.php'); ?>
>>>>>>> final

