function showResult(str) {
    if (str.length==0) { 
      document.getElementById("livesearch").innerHTML="";
      document.getElementById("livesearch").style.border="0px";
      return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            var data = JSON.parse(this.responseText);
            var hint = "";
            data.forEach(function(item){
                hint += "<div><a href='#main'><span>"+item.title+"</span></a></div>";
            });
            document.getElementById("livesearch").innerHTML= hint;
            document.getElementById("livesearch").style.border="1px solid yellowgreen";
            renderResult(data);
      }
    }
    xmlhttp.open("GET","functions/function_search.php?q="+str,true);
    xmlhttp.send();
}

function renderResult(data){
    var picTitle = document.getElementById('pic-title');
    var picTable = document.getElementById('pic-table');
    var picContainer = document.getElementById("searchResult");
    //Make sure table clear
    if(picTable.rows.length > 1)
        for(let i = picTable.rows.length-1;i > 0;i--)
        {
            picTable.deleteRow(i);
        }
    data.forEach(function(pic){
        let newRow = picTable.insertRow(-1);
        let rowCells = [
            "place",
            "title",
            "date",
            "price",
        ];
        for(let i = 0; i < rowCells.length;i++)
        {
            let newCell = newRow.insertCell(i);
            let newText = document.createTextNode(pic[rowCells[i]]);
            newCell.appendChild(newText);
        }
        let newCell = newRow.insertCell(-1);
        let newAnchor = document.createElement("a");
        let newText = document.createTextNode("See details...");
        newAnchor.appendChild(newText);
        newAnchor.href="picnic.php?ref="+pic['ref'];
        newAnchor.innerHTML = "See details...";
        newCell.appendChild(newAnchor);
    });
    searchResult.style.display = "block";
}