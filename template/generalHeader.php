<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
    <title>Index</title>
    <?php
        session_name();
        session_start();
    ?>
</head>
<body>
    <div class="grid">
    <header id="head">
        <div id="logo">
            <img src="images/logo.png" alt="">
            <span>
            Picnic to the 
            <br>    
                <strong>max</strong>
            </span>
        </div>
        <div id="nav-items">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <?php
                if(isset($_SESSION['user']))
                    echo "<li id='login-trigger'><a href='#'>Welcome ".$_SESSION['user']['username'].".</a></li>";
                else
                    echo "<li id='login-trigger'><a>Login ▼</a></li>";
                ?>
            </ul>
        </div>
        <div id="login-wrapper">
            <div id="login-content">
                <div id="login-header">
                    <h2><?php echo !isset($_SESSION['user']) ? "Login !" : "Edit?" ?></h2>
                    <span onclick="closeLogin()">&times</span>
                </div>
                <div id="login-body">
                    <?php require_once("login.php"); ?> 
                </div>
            </div>
        </div>
    </header>
