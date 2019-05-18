<?php
        if(!isset($_SESSION['user']))
        {
            echo notLogged();
        }
        else
        {
            echo isLogged();
        }

        function isLogged(){
            return <<<HTML
        
            <form action="functions/function_update.php" method="post" onclick="return checkPassword()">
                <fieldset>
                    <div class="row">
                        <input type='text' name='username' id='headerUsername' placeholder={$_SESSION['user']['username']}>
                        <input type='email' name='email' id='headerEmail' placeholder={$_SESSION['user']['email']}>
                        <input type='date' name='birth' id='headerBirth' placeholder={$_SESSION['user']['birth']}>
                    </div>
                    <div class="row">
                        <input type='text' name='address' id='headerAddress' placeholder={$_SESSION['user']['address']}>
                        <input type='number' name='phone' id='headerPhone' placeholder={$_SESSION['user']['phone']}>
                    </div>
                    <div class="display:flex;flex-direction:row;">
                        <input type='password' name='password' id='headerPassword' placeholder='New Password!'>
                        <input type='password' name='confirmPassword' id='confirmPassword' placeholder='Confirm password!'>
                    </div>
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
HTML;
            }
            
        function notLogged(){
            return <<<HTML
        
                <form action="functions/function_login.php" method="POST">
                <fieldset>
                    <input type="text" name="headerUsername" id="headerUsername" placeholder="Enter username!">
                    <input type="password" name="headerPassword" id="headerPassword" placeholder="Enter Password!">
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
HTML;
        }
    ?>