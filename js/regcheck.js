function Validate()
{
    var data = document.getElementById("form1");
    var email = data.elements[1].value;
    var user = data.elements[2].value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Valid"){
            	document.getElementById("demo").innerHTML = this.responseText;
            }else{
            	document.getElementById("demo").innerHTML = this.responseText;
            }
        }
    };

    xmlhttp.open("GET", "../Server/check.php?e=" + email+"&u="+user, true);
    xmlhttp.send();

}