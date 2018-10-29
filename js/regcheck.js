function Validate()
{
    var data = document.getElementById("form1");
    var email = data.elements[1].value;
    var user = data.elements[2].value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Valid"){
            	document.getElementById("error").innerHTML = "Account Created";
              //  window.location.replace("../WebClient/main.php#page3"); redirect to login?
            }else{
            	document.getElementById("error").innerHTML = this.responseText;
            }
        }
    };

    xmlhttp.open("GET", "../Server/check.php?e=" + email+"&u="+user, true);
    xmlhttp.send();

}