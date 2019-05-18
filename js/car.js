var slideIndex = 0;
carousel()
setInterval(carousel,5000);
function carousel() {
  var i;
  var x = document.getElementsByClassName("slide");
  unfade(x[slideIndex]);
  slideIndex = (slideIndex+1)%x.length;
  fade(x[slideIndex]);
}

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