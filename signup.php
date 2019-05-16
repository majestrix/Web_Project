<?php require_once("template/generalHeader.php") ?>
<style>
<?php require_once("css/header.css"); ?>
<?php require_once("css/signup.css"); ?>
<?php require_once("css/footer.css"); ?>
</style>
    <div id="main">
    	<form name="myForm" action="functions/function_register.php" method="POST" onsubmit="return validateForm()">
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
<div id="slide">
    	<img src="images/happyv.png">
    	<br>
    	<img src="images/bestv.png">
    	<br>
    	<img src="images/maxv.png">
</div>
<?php require_once("template/footer.php"); ?>
<script src="js/signup.js"></script>