var slideIndex = 0;
setInterval(carousel,5000);
function carousel() {
  var i;
  var x = document.getElementsByClassName("slide");
  fade(x[slideIndex]);
  slideIndex = (slideIndex+1)%x.length;
  unfade(x[slideIndex]);
}

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
// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     document.getElementById("logo").style.display = "none";
//   } else {
//     document.getElementById("logo").style.display = "block";
//   }
// }

function unfade(element) {
  var op = 0.1;  // initial opacity
  element.style.display = 'block';
  var timer = setInterval(function () {
      if (op >= 1){
          clearInterval(timer);
      }
      element.style.opacity = op;
      element.style.filter = 'alpha(opacity=' + op * 100 + ")";
      op +=  0.02;
  }, 70);
}

function fade(element) {
  var op = 1;  // initial opacity
  var timer = setInterval(function () {
      if (op <= 0.1){
          clearInterval(timer);
          element.style.display = 'none';
      }
      element.style.opacity = op;
      element.style.filter = 'alpha(opacity=' + op * 100 + ")";
      op -= 0.02;
  }, 30);
}