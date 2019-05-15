<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
</head>
<body>
 <div class="grid">
    <header id="head">
        <div id="logo">
            <h1>Picnic R Us</h1>
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
    </header>
    
    <div id="main">
    	<form name="myForm" action="signed.php" method="POST" onsubmit="return validateForm()">
    		<div id="form1">
		    	<h2>1st Step: Create an Account</h2>
				<fieldset><br>
				<label>Name:<label class="error">*</label></label><br>
				<input type="text" name="name" id="name" placeholder="Enter Name" >
				<br><br>
				<label>Address:<label class="error">*</label></label> <br>
				<textarea placeholder="Enter Address" id="address" name="address"  rows="4" cols="50"></textarea>
				<br><br>
				<LABEL>Date of Birth:<label class="error">*</label></LABEL> <br>
				<input type="date" id="dob" name="dob" required>
				<br><br>
				<label>ID Number:<label class="error">*</label></label> <br>
				<input type="number" name="id" id="id" placeholder="Enter ID (10 digits)" min="1000000000" max="9999999999" >
				<br><br>
				<label>e-mail:<label class="error">*</label></label> <br>
				<input type="e-mail" name="email" id="email" placeholder="Enter Email" >
				<span id="emailErr" class="error"></span>
				<br><br>
				<label>Telephone/Fax Number:<label class="error">*</label></label> <br>
				<input type="number" id="phone" name="phone" placeholder="Enter Phone" >
				<br><br>
				<button type="reset" class="cancelbtn">Clear</button>
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
				<label>ID Number:</label> <br>
				<input type="number" name="idV" id="idV" placeholder="Enter ID (10 digits)" min="1000000000" max="9999999999">
				<br><br>
				<label>e-mail:</label> <br>
				<input type="e-mail" name="emailV" id="emailV" placeholder="Enter Email">
				<span id="emailErrV" class="error"></span>
				<br><br>
				<label>Telephone/Fax Number:</label> <br>
				<input type="number" name="phoneV" id="phoneV" placeholder="Enter Phone">
				<br><br>
				<button type="reset" class="cancelbtn">Clear</button>
				<button id="confirm" type="submit" class="signupbtn" name="confrim">Confirm</button>
				</fieldset>
			</div>
		</form>
  </div>
<br><br>
  <footer>
    		<div id="address">
    			<br>
    			<a href="https://www.google.com/maps/place/Birzeit+University/@31.9581167,35.1851878,16z/data=!4m5!3m4!1s0x0:0x59cc7240d2f7d960!8m2!3d31.959192!4d35.1820073"><img src="icons/map.svg" height="21px" width="21px" alt="bzu" title="address"></a>
    			<strong>ADDRESS</strong>
       			<address>
       				<p>Picnic R Us</p>
       				<p>Abu-Qash, Birzeit</p>
       				<p>Palestine</p>
       			</address>
    		</div>
    		<div id="contact">
    			<br>
    			<div> 
    				<strong>CONTACT WITH US</strong>
    			</div>
    			<br>
    			<div>
    				<img src="icons/facebook1.png" height="25px" width="25px" title="facebook" alt="facebook" class="cont"> 
    				<a href="https://www.facebook.com/BirzeitUniversity/" class="val">Facebook</a>
    			</div>
    			<br> 
    			<div>
    				<img src="icons/twitter1.png" title="twitter" alt="twitter" height="28px" width="28px" class="cont"> 
    				<a href="https://twitter.com/picnic?lang=en" class="val">Twitter</a>
    			</div>
    			<br>
    			<div>
    				<img src="icons/email.png" title="email" alt="email" height="25px" width="25px" class="cont"> 
    				<a href="mailto:laith.marzouka@gmail.com" class="val">Picnic@RS.org</a>
    			</div>
    			<br>
    			<div>
    			<img src="icons/tel.png" title="phone" alt="phone" height="21px" width="21px"  class="cont">
    			<label class="val">+970592607887</label>
    			</div>
    			
    			<br>
    		</div>
    		<div id="company">
    			<br>
    			<strong>COMPANY</strong> <br><br>
    			<div><a href="about.html"> About Us </a> </div>
    			<br>
    			<div>
    				<a href="news.php"> News </a>
    			</div>
    			
    		</div>
    		<div id="copy">
    			<p>Amjad Shomali 1161957</p>
    			<p>Laith Marzouka 1160827</p>
    			<p>&copy 2019 PicnicRUs.Inc, All Rights Reserved.</p>
    		</div>
    </footer>
    <div id="slide">
    	<img src="photos/happyv.png">
    	<br>
    	<img src="photos/bestv.png">
    	<br>
    	<img src="photos/maxv.png">
    </div>
</div>
    <script src="signup.js"></script>
</body>
</html>