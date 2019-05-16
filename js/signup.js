var f1 = document.getElementById("form1");
var f2 = document.getElementById("form2");
var f3 = document.getElementById("form3");
var b1 = document.getElementById("firtNext");
var b2 = document.getElementById("secondNext");
var b3 = document.getElementById("confirm");
f2.style.display ="none";
f3.style.display = "none";
function nextStep(){
	var x=0;
	if (document.getElementById("name").value == ""){
		document.getElementById("name").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("name").style.border = "none";
	}
	if (document.getElementById("address").value == ""){
		document.getElementById("address").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("address").style.border = "none";
	}
	if (document.getElementById("dob").value == ""){
		document.getElementById("dob").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("dob").style.border = "none";
	}
	if (document.getElementById("email").value == ""){
		document.getElementById("email").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("email").style.border = "none";
	}
	if (document.getElementById("id").value == ""){
		document.getElementById("id").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("id").style.border = "none";
	}
	if (document.getElementById("phone").value == ""){
		document.getElementById("phone").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("phone").style.border = "none";
	}
	var email=document.getElementById("email").value;
	var isEmail = validateEmail(document.getElementById("email").value);
	var valid = validateData();
	if (!isEmail) {
		document.getElementById("email").style.border = "2px solid red";
		if (!email == ""){
			document.getElementById("emailErr").innerHTML = "*e-mail is invalid";
		} else {
			document.getElementById("emailErr").innerHTML = "";
		}
	} else  if (x == 0){
		document.getElementById("email").style.border = "none";
		document.getElementById("emailErr").innerHTML = "";
			f1.style.display ="none";
			f3.style.display = "none";
			f2.style.display = "block";
		
	  }
	  var input = document.getElementById("phone");
		input.addEventListener("keyup", function(event) {
  		if (event.keyCode === 13) {
   			event.preventDefault();
   			document.getElementById("firstNext").click();
  		}
		});
}
function backStep(){
	f2.style.display = "none";
	f3.style.display = "none";
	f1.style.display = "block";
}
function laterStep(){
	var user = document.getElementById("user").value;
	var password = document.getElementById("password").value;
	var passwordC = document.getElementById("passwordC").value;
	var name =document.getElementById("name").value;
	var address =document.getElementById("address").value;
	var dob =document.getElementById("dob").value;
	var id =document.getElementById("id").value;
	var email =document.getElementById("email").value;
	var phone =document.getElementById("phone").value;
	var user =document.getElementById("user").value;
	var validU = validateUser(user);
	var validP = validatePsw(password);
	if (document.getElementById("user").value == ""){
		document.getElementById("user").style.border = "2px solid red";
		x=1;
	} 
	if (document.getElementById("password").value == ""){
		document.getElementById("password").style.border = "2px solid red";
		document.getElementById("pswErr").value = "";
		x=1;
	}
	
	if (document.getElementById("passwordC").value == ""){
		document.getElementById("passwordC").style.border = "2px solid red";
		x=1;
	}
		if (password == passwordC && password != ""){
			document.getElementById("pswCon").innerHTML = "";
			document.getElementById("passwordC").style.border = "none";
			if (validU && validP) {
			document.getElementById("nameV").value = name;
			document.getElementById("userV").value = user;
			document.getElementById("addressV").value= address;
			document.getElementById("dobV").value = dob;
			document.getElementById("idV").value = id;
			document.getElementById("emailV").value = email;
			document.getElementById("phoneV").value = phone;
			f1.style.display ="none";
			f2.style.display = "none";
			f3.style.display = "block";
			}
		} else {
			if (password != "")
			document.getElementById("pswCon").innerHTML = "*passwords do not match";
		}
		var input = document.getElementById("passwordC");
		input.addEventListener("keyup", function(event) {
  		if (event.keyCode === 13) {
   			event.preventDefault();
   			document.getElementById("secondtNext").click();
  		}
		});
}

function validateForm(){
	var x = 0;
	if (document.getElementById("nameV").value == ""){
		document.getElementById("nameV").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("nameV").style.border = "none";
	}
	if (document.getElementById("addressV").value == ""){
		document.getElementById("addressV").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("addressV").style.border = "none";
	}
	if (document.getElementById("dobV").value == ""){
		document.getElementById("dobV").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("dobV").style.border = "none";
	}
	if (document.getElementById("emailV").value == ""){
		document.getElementById("emailV").style.border = "2px solid red";
		document.getElementById("emailErrV").value == "";
		x=1;
	}
	else {
		document.getElementById("emailV").style.border = "none";
	}
	if (document.getElementById("idV").value == ""){
		document.getElementById("idV").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("idV").style.border = "none";
	}
	if (document.getElementById("phoneV").value == ""){
		document.getElementById("phoneV").style.border = "2px solid red";
		x=1;
	}
	else {
		document.getElementById("phoneV").style.border = "none";
	}
	if (document.getElementById("userV").value == ""){
		document.getElementById("userV").style.border = "2px solid red";
		document.getElementById("userErrV").value == "";
		x=1;
	} 
	var email=document.getElementById("emailV").value;
	var isEmail = validateEmail(document.getElementById("emailV").value);
	if (!isEmail) {
		document.getElementById("emailV").style.border = "2px solid red";
		if (!email == ""){
			document.getElementById("emailErrV").innerHTML = "*email is invalid";
		} else {
			document.getElementById("emailErrV").innerHTML = "";
		}
	} else {
		document.getElementById("emailV").style.border = "none";
		document.getElementById("emailErrV").innerHTML = "";
	}
	user = document.getElementById("userV").value;
	var validU = validateUserV(user);
	console.log(validU,x,isEmail);
	if (!validU || x != 0 || !isEmail){
		return false;
	}
	return true;

}

function validateData(){
var name =document.getElementById("name").value;
var address =document.getElementById("address").value;
var dob =document.getElementById("dob").value;
var id =document.getElementById("id").value;
var phone =document.getElementById("phone").value;
	if (name == "" || address == "" || dob == "" || id == "" || email == "" || phone == "")
		return false;
return true;
}
function validateEmail(email) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true);
}	
return false;
}
function validateUser(user){
	if (user == ""){
		document.getElementById("userErr").innerHTML = "";
		document.getElementById("user").style.border = "2px solid red";
		return false;
	}
	if (5 < user.length && user.length < 14){
		document.getElementById("user").style.border = "none";
		document.getElementById("userErr").innerHTML = "";
		return true;
	} else {
		document.getElementById("user").style.border = "2px solid red";
		document.getElementById("userErr").innerHTML = "*Username is invalid";
		return false;
	}
}
function validateUserV(user){
	if (user == ""){
		document.getElementById("userErrV").innerHTML = "";
		document.getElementById("userV").style.border = "2px solid red";
		return false;
	}
	if (5 < user.length && user.length < 14){
		document.getElementById("userErrV").innerHTML = "";
		document.getElementById("userV").style.border = "none";
		return true;
	} else {
		document.getElementById("userV").style.border = "2px solid red";
		document.getElementById("userErrV").innerHTML = "*Username is invalid";
		return false;
	}
}
function validatePsw(psw){
	if (psw == ""){
		document.getElementById("pswErr").innerHTML = "";
		return false;
	}
	var m = psw.substring(0, 1);
	var x = psw.length;
	var l = psw.substring((x-1),x);
	if (8 <= x && x <= 13 && (m.match(/[A-Z]/g)) && (l.match(/[0-9]/g))){
		document.getElementById("pswErr").innerHTML = "";
		document.getElementById("password").style.border = "none";
		return true;
	} else {
		document.getElementById("pswErr").innerHTML = "*Password is invalid";
		document.getElementById("password").style.border = "2px solid red";
		document.getElementById("passwordC").style.border = "2px solid red";
		return false;
	}
}

