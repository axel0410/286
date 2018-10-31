function Register()
{
    var formdata = document.getElementById("register");

    var name = formdata.elements[0].value;
    var email = formdata.elements[1].value;
    var user = formdata.elements[2].value;
    var phone = formdata.elements[3].value;
    var pass = formdata.elements[4].value;
    var data = 'n='+name+'&e='+email+'&u='+user+'&p='+phone+'&w='+pass;
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

    xmlhttp.open('POST', '../Server/Registration.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);   
}
//document.getElementById("error").innerHTML = this.responseText;

function Login(){

    var formdata = document.getElementById("login");
    var user = formdata.elements[0].value;
    var pass = formdata.elements[1].value;

    var data ='u='+user+'&p='+pass;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Signed in!"){
                window.alert("You have logged in as "+user);
                window.location.reload();
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open('POST', '../Server/Login.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);   
}

function Logout(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Signed Out"){
                window.location.reload();
            }else{
                window.alert("Problem logging you out");
            }
        }
    };
    xmlhttp.open('GET', '../Server/Logout.php?', true);
    xmlhttp.send();   
}