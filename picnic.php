<?php require_once('template/generalHeader.php'); ?>
<style>
        <?php require_once('css/header.css'); ?>
        <?php require_once('css/picnic.css'); ?>
        <?php require_once('css/footer.css'); ?>
</style>
        <?php
         $db = new PDO("mysql:host=localhost;dbname=c59_Noodles",'root','');
         $ref = $_GET['ref'];    
         $res = $db->query("SELECT * FROM picnic WHERE ref='".$ref."'")->fetch(PDO::FETCH_ASSOC);
        ?>
<article id="main">
        <div id="left">
                <img src="<?php echo $res['src'] ?>">       
        </div>
        <div id="right">
                <h1><?php echo $res['title'] ?></h1>
                <span><?php echo $res['place'] ?></span>
                <div>
                        <span><?php echo "$".$res['price'] ?></span>
                        <button>Book now!</button>
                </div>
        </div>
</article>
<?php require_once('template/footer.php'); ?>
<script src="js/header.js"></script>

