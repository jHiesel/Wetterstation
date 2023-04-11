function loadDoc() {
    const e = document.getElementById("station");


    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        let measurements = JSON.parse(this.responseText);
        let response;

        
        measurements.forEach(function(object, index){

            response += "<tr>"+
                            "<td>"+ object.time +"</td>" +
                            "<td>"+ object.temperature +"</td>" +
                            "<td>"+ object.rain +"</td>" +"<td>" + index+ "</td>"+
                        "</tr>"
        });
        document.getElementById("measurements").innerHTML =  response.substring(9) ;


    }
    xhttp.open("GET", "api.php?r=station/"+e.options[e.selectedIndex].value+"/measurements");
    xhttp.send();


}