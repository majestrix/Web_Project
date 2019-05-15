<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
                    echo "<li id='login-trigger'><a href='#'>Welcome ".$_SESSION['user']['user'].".</a></li>";
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
                    <?php
                    if(!isset($_SESSION['user']))
                    {
                        echo notLogged();
                    }
                    else
                    {
                        echo isLogged();
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="slideShow">
            <div class="text-center">
                <div id="searchText">
                    <h2>Suit yourself with a picnic!</h2>
                    <input type="text" placeholder="Search here" onkeyup="showResult(this.value)">
                    <div id="livesearch"></div>
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
    <?php
        function isLogged(){
            return <<<ECHO
            <form action="functions/function_update.php">
                <fieldset>
                    <input type='text' name='username' id='username' placeholder={$_SESSION['user']['user']}>
                    <input type='password' name='password' id='password' placeholder={$_SESSION['user']['pass']}>
                    <input type='password' name='confirmPassword' id='confirmPassword' placeholder='Confirm password!'>
                </fieldset>
                <fieldset>
                    <input type='submit' id='submit'>
                </fieldset>
            </form>
            <form action='functions/function_logout.php' method='GET'>    
                <fieldset>
                    <input type='submit' id='logout' value="Logout">
                </fieldset>
            </form>
ECHO;
            }
            
        function notLogged(){
            return <<<ECHO
                <form action="functions/function_login.php" method="POST">
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
