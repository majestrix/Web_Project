var postForm = document.getElementById("post");
var editForm = document.getElementById("edit");
var mainWrap = document.getElementById("main");
var home = document.getElementById("homeAnchor");
var post = document.getElementById("postAnchor");
var edit = document.getElementById("editAnchor");

window.onload = function(){
    editForm.style.visibility = "none";
    postForm.style.visibility = "none";
    viewMain()
}

function viewMain(){
    home.classList.add("active");
    edit.classList.remove("active");
    post.classList.remove("active");
    // postForm.style.display = "block";
    // editForm.style.display = "none";
    mainWrap.classList.add("fadeIn");
    mainWrap.classList.remove("fadeOut");

    editForm.classList.remove("fadeIn");
    editForm.classList.add("fadeOut");
    postForm.classList.remove("fadeIn");
    postForm.classList.add("fadeOut");
}
function viewPost(){
    home.classList.remove("active");
    edit.classList.remove("active");
    post.classList.add("active");
    // postForm.style.display = "block";
    // editForm.style.display = "none";
    editForm.classList.remove("fadeIn");
    editForm.classList.add("fadeOut");
    mainWrap.classList.remove("fadeIn");
    mainWrap.classList.add("fadeOut");

    postForm.classList.add("fadeIn");
    postForm.classList.remove("fadeOut");
}
function viewEdit(){
    home.classList.remove("active");
    edit.classList.add("active");
    post.classList.remove("active");
    // postForm.style.display = "none";
    // editForm.style.display = "block";
    editForm.classList.remove("fadeOut");
    editForm.classList.add("fadeIn");

    postForm.classList.remove("fadeIn");
    postForm.classList.add("fadeOut");
    mainWrap.classList.remove("fadeIn");
    mainWrap.classList.add("fadeOut");
}

function updateStuff(x){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText.slice(0,-2));
                // console.log(this.responseText.slice(0,-2));
                console.log(data);
                updateData(data);
            }
        };
        xmlhttp.open("GET", "functions/function_update_manager.php?q=" + x, true);
        xmlhttp.send();
}

function updateData(x){
    var title = document.getElementById("title");
    var place = document.getElementById("place");
    var date = document.getElementById("date");
    var departure = document.getElementById("departure");
    var arrival = document.getElementById("arrival");
    var back = document.getElementById("back");
    var meet = document.getElementById("meet");
    var trans = document.getElementById("transportation");
    var price = document.getElementById("price");
    var desc = document.getElementById("description");
    title.value = x['title'];
    place.value = x['place'];
    date.value = x['date'];
    departure.value = x['departure'];
    arrival.value = x['arrival'];
    back.value = x['back'];
    price.value = x['price'];
    meet.value = x['meet'];
    trans.value = x['transportation'];
    desc.value = x['description'];
}