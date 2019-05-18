
    <?php require_once("template/generalHeader.php"); ?>
    <style type="text/css">
          <?php require_once("css/header.css"); ?>
          <?php require_once("css/signup.css"); ?>
          <?php require_once("css/footer.css"); ?>
    </style>
    
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    session_name("session_name");
    session_start();
    $_SESSION["user"] = $_POST['userV'];
    $dbhost="localhost";
    $dbname="c59_Noodles";
    $dbuser="c59_Noodles";
    $dbpass="noodles4life";
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
    if(!$pdo ) {
        die("Could not connect to database");
    }
    $pass = md5($_POST["password"]);
    $sqlStatement = "INSERT INTO customer (name, username, pass,email,birth,address,phone) VALUES (?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sqlStatement);
            $status = $stmt->execute([trim($_POST['nameV']), trim($_POST['userV']), $pass, trim($_POST['emailV']), $_POST['dobV'], $_POST['addressV'], $_POST["phoneV"]]);
             if(!$status ) {
                echo $stmt->error;
            }
        $str = "SELECT max(`customer id`) as id FROM customer";
        $result = $pdo->query($str);
        $max = 0;
        while ($row = $result->fetch()){
            $max = ($row['id']);
        }
        $u = "Username: ".$_POST['userV'];
        $v = "Customer ID: $max";
        echo "<script type='text/javascript'>
        alert('$u\\n$v'); 
        window.location.replace(\"http:index.php\");
        </script>";

    }
    ?>

    <div id="main">
    	<form name="myForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validateForm()">
    		<div id="form1">
		    	<h2>1st Step: Create an Account</h2>
				<fieldset><br>
				<label>Name:<label class="error">*</label></label><br>
				<input type="text" name="name" id="name" placeholder="Enter Name">
				<br><br>
				<label>Address:<label class="error">*</label></label> <br>
				<textarea placeholder="Enter Address" id="address" name="address"  rows="4" cols="50"></textarea>
				<br><br>
				<LABEL>Date of Birth:<label class="error">*</label></LABEL> <br>
				<input type="date" id="dob" name="dob" required>
				<br><br>
				<label>e-mail:<label class="error">*</label></label> <br>
				<input type="e-mail" name="email" id="email" placeholder="Enter Email" >
				<span id="emailErr" class="error"></span>
				<br><br>
				<label>Telephone/Fax Number:<label class="error">*</label></label> <br>
				<input type="number" id="phone" name="phone" placeholder="Enter Phone" >
				<br><br>
				<button type="button" id="firstClear" onclick="firstReset()" class="cancelbtn" name="firstClear">Clear</button>
                <script type="text/javascript">
                    function firstReset(){
                        document.getElementById("name").style.border ="none";
                        document.getElementById("name").value ="";
                        document.getElementById("address").style.border ="none";
                        document.getElementById("address").value ="";
                        document.getElementById("dob").style.border ="none";
                        document.getElementById("dob").value ="";
                        document.getElementById("email").style.border ="none";
                        document.getElementById("email").value ="";
                        document.getElementById("phone").style.border ="none";
                        document.getElementById("phone").value ="";
                        document.getElementById("emailErr").innerHTML ="";
}
                </script> 
				<button type="button" id="firstNext" onclick="nextStep()" class="signupbtn" name="firstN">Next -></button> 
				</fieldset>
			</div>
			<div id="form2">
				<h2>2nd Step: Create an E-Account</h2>
				<fieldset>
				<LABEL>Username:<label class="error">*</label></LABEL> <br>
				<input type="text" name="user" id="user" placeholder="Enter username (6-13 chars)">
				<span id="userErr" class="error"></span>
				<br><br>
				<label>Password:<label class="error">*</label></label> <br>
				<input type="password" id="password" name="password" placeholder="Enter password"> 
				<span><img src="icons/info.png" alt="password should be 8-13 characters, start with an upper case alphabet and ends with a digit" title="password should be 8-13 characters, start with an upper case alphabet and ends with a digit" width="21px" height="21px"></span>
				<span id="pswErr" class="error"></span>
				<br><br>
				<LABEL>Confirm Password:<label class="error">*</label></LABEL> <br>
				<input type="password" id="passwordC" name="password" placeholder="Enter password">
				<br>
				<span id="pswCon" class="error"></span>
				<br><br>
				<button type="button" id="previous" onclick="backStep()" class="cancelbtn" name="previous"><- Previous</button>
				<button type="button" id="secondNext" onclick="laterStep()" class="signupbtn" name="secondNext"> Next -></button>
				</fieldset>
			</div>
			<div id="form3">
				<h2>3nd Step: Confirm Submission</h2>
				<fieldset><br>
				<label>Name:</label> <br>
				<input type="text" name="nameV" id="nameV" placeholder="Enter Name" >
				<br><br>
				<LABEL>Username:</LABEL> <br>
				<input type="text" name="userV" id="userV" placeholder="Enter username">
				<span id="userErrV" class="error"></span>
				<br><br>
				<label>Address:</label> <br>
				<textarea placeholder="Enter Address" id="addressV" name="addressV" rows="4" cols="50"></textarea>
				<br><br>
				<LABEL>Date of Birth:</LABEL> <br>
				<input type="date" name="dobV" id="dobV">
				<br><br>
				<label>e-mail:</label> <br>
				<input type="e-mail" name="emailV" id="emailV" placeholder="Enter Email">
				<span id="emailErrV" class="error"></span>
				<br><br>
				<label>Telephone/Fax Number:</label> <br>
				<input type="number" name="phoneV" id="phoneV" placeholder="Enter Phone">
				<br><br>
				<button type="button" id="reset" onclick="cancel()" class="cancelbtn">Clear</button>
                 <script type="text/javascript">
                    function cancel(){
                        document.getElementById("nameV").style.border ="none";
                        document.getElementById("nameV").value ="";
                        document.getElementById("userErrV").innerHTML ="";
                        document.getElementById("addressV").style.border ="none";
                        document.getElementById("addressV").value ="";
                        document.getElementById("dobV").style.border ="none";
                        document.getElementById("dobV").value ="";
                        document.getElementById("userV").style.border ="none";
                        document.getElementById("userV").value ="";
                        document.getElementById("emailV").style.border ="none";
                        document.getElementById("emailV").value ="";
                        document.getElementById("emailErrV").innerHTML ="";
                        document.getElementById("phoneV").style.border ="none";
                        document.getElementById("phoneV").value ="";
                    }
                </script> 
				<button id="confirm" type="submit" class="signupbtn" name="confrim">Confirm</button>
				</fieldset>
			</div>
		</form>
  </div>
<div id="fill">
    <img src="images/happyv.png">
    <br>
    <img src="images/bestv.png">
    <br>
    <img src="images/maxv.png">
</div>
<?php require_once("template/footer.php"); ?>
<script type="text/javascript" src="js/signup.js"></script>
<script type="text/javascript" src="js/car.js"></script>