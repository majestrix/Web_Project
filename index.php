<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
    <title>Index</title>
    <?php
        session_start();
    ?>
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
                <?php
                if(isset($_SESSION['user']))
                    echo "<li id='welUser'><a href='#'>Welcome ".$_SESSION['user'].".</a></li>";
                else
                    echo "<li id='login-trigger'><a>Login ▼</a></li>";
                ?>
            </ul>
        </div>
        <div id="login-wrapper">
            <div id="login-content">
                <div id="login-header">
                    <h2>Login !</h2>
                    <span onclick="closeLogin()">&times</span>
                </div>
                <div id="login-body">
                    <?php
                    if(!isset($_SESSION['user']))
                    {
                        <<<ECHO
                        <form action="function_login.php" method="POST">
                        
                        <fieldset>
                            <input type="text" name="username" id="username" placeholder="Enter username!">
                            <input type="password" name="password" id="password" placeholder="Enter Password!">
                        </fieldset>
                        <fieldset>
                            <input type="submit" id="submit">
                            <div id="keepme">
                                <input type="checkbox" name="keep">
                                <span>Keep me signed in</span>
                            </div>
                        </fieldset>
                        <a href="signup.php">Not signed in? Sign up now!</a>
                    </form>
ECHO;
                    }
                    ?>
                </div>
            </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="car.js"></script>
</body>
</html>