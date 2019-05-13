<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
    <title>Index</title>
</head>
<body>
    <div class="grid">
    <header id="head">
        <div id="logo">
            <h1>LOGO</h1>
            <small>Keep calm something something...</small>
        </div>
        <div id="nav-items">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#aleft">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
        <div class="slideShow">
            <div class="text-center">
                <div id="searchText">
                    <h2>Suit yourself with a picnic!</h2>
                    <input type="text" placeholder="Search here">
                </div>
            </div>
            <?php
            $files=glob("images/*.jpg");
            forEach($files as $img)
            {
                echo "<div class='slide' >";
                echo "<img src=".$img." >";
                echo "</div>";
            }
            ?>
        </div>
    </header>


    <aside id="news">
    Left Aside
    </aside>
    
    <article id="main">
    Main stuff here
    </article>
    
    <footer id="contact">
        <h1>
            Copyrights and stuff!
        </h1>
    </footer>
    </div>
    <script src="car.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>