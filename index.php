<?php require_once('template/header.php'); ?>
<style>
    <?php require_once('css/index.css'); ?>
</style>

    <aside id="news">
    Left Aside
    </aside>
    
    <article id="main">
        <?php
        if(isset($_SESSION['search']))
        print_r($_SESSION['search']);
        echo <<<HTML
            <div id="searchResult">
            <h2>Picnic: {$_SESSION['search']['title']}</h2>
            <table>
            <tr>
                    <th>Destination</th>
                    <th>Place</th>
                    <th>Date</th>
                    <th>By</th>
                </tr>
            </table>
HTML;
        ?>
        </div>
    </article>

<?php require_once('template/footer.php'); ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="js/car.js"></script>
<script src="js/livesearch.js"></script>