<?php require_once('template/header.php'); ?>
<style>
    <?php require_once('css/header.css'); ?>
    <?php require_once('css/index.css'); ?>
    <?php require_once('css/footer.css'); ?>
</style>

    <aside id="news">
        <h4><b>Latest picnic:</b></h4>
    <?php
        $dbhost="localhost";
        $dbname="c59_Noodles";
        $dbuser="c59_Noodles";
        $dbpass="comp334!";
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
        $res = $db->query("SELECT * FROM picnic");
        $res = $res->fetchAll();
        $res = end($res);
        $title = $res['title'];
        $ref = $res['ref'];
        $src = $res['src'];
        echo "<figure>";
        echo "<a href='picnic.php?ref=$ref'><img src=$src></a>";
        echo "<figcaption>$title</figcaption>";
        echo "</figure>";
    ?>
    </aside>
    
    <article id="main">
        <h1>Welcome to our page!</h1>
        <div id="searchResult">
            <h2 id="pic-title">Available picnics</h2>
            <table id="pic-table">
                <thead>
                    <tr>
                        <th>Destination</th>
                        <th>Place</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th>Details</th>
                    </tr>
                </thead>
            </table>
        </div>
    </article>

<?php require_once('template/footer.php'); ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="js/car.js"></script>
<<<<<<< HEAD
<script src="js/header.js"></script>
=======
>>>>>>> final
<script src="js/livesearch.js"></script>
