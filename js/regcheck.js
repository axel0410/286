function Validate()
{
    var data = document.getElementById("form1");

    var name = data.elements[0].value;
    var email = data.elements[1].value;
    var user = data.elements[2].value;
    var phone = data.elements[3].value;
    var pass = data.elements[4].value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Valid"){
                window.alert("Account Created");
                window.location.replace("../WebClient/main.php#page3"); 
                
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open("GET", "../Server/Registration.php?n=" + name+"&e="+email+"&u="+user+"&p="+phone+"&w="+pass, true);
    xmlhttp.send();
    
}

//document.getElementById("error").innerHTML = this.responseText;