var loginButton = document.getElementById("login-trigger");
var loginContent = document.getElementById("login-wrapper");
loginButton.addEventListener('click',function(){
  loginContent.classList.toggle('active');

  if(loginContent.classList.contains('active'))
    loginContent.style.display = "block";
  else
    loginContent.style.display = "none";
    
  });
  
  function closeLogin(element){
    loginContent.classList.remove('active');
    if(loginContent.classList.contains('active'))
      loginContent.style.display = "block";
    else
      loginContent.style.display = "none";
}

function checkPassword(){
  var pass = document.getElementById("headerPassword");
  var cPass = document.getElementById("confirmPassword");
  if(pass.value != cPass.value)
    return false;
  return true;
}
