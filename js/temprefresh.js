var temp = document.getElementById("temp");

function temprefresh() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            temp.innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "php/temperatuur.php", true);
    xhttp.send();
}
temprefresh();
setInterval(function(){ temprefresh(); }, 30000);


