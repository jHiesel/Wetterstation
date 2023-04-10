function loadDoc() {
    const e = document.getElementById("station");


    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        document.getElementById("test").innerHTML = this.responseText;
    }
    xhttp.open("GET", "api.php?r=station/"+e.options[e.selectedIndex].value+"/measurements");
    xhttp.send();


}