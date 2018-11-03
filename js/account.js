function Register()
{
	var formdata;
	if(document.getElementById("register1")!=null){
		formdata=document.getElementById("register1");
	}else if(document.getElementById("register2")!=null){
		formdata=document.getElementById("register2");
	}

    var name = formdata.elements[0].value;
    var email = formdata.elements[1].value;
    var user = formdata.elements[2].value;
    var phone = formdata.elements[3].value;
    var pass = formdata.elements[4].value;
    var priv;
    if(formdata.elements.length==6){
    	priv =formdata.elements[5].value;
    }else{
    	priv=null;
    }
 
    var data = 'n='+name+'&e='+email+'&u='+user+'&p='+phone+'&w='+pass+'&pr='+priv;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Valid"){
                window.alert("Account Created");
                window.location.replace("#page3"); 
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open('POST', '../Server/Registration.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);   
}



function userSearch(){
    var formdata = document.getElementById("userSearch");
    var user = formdata.elements[0].value;
    var data = 'u='+user;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("userInfo").style.display = "block";
            document.getElementById("userInfo").innerHTML = this.responseText;
        }
    };
    xmlhttp.open('POST', '../Server/UserSearch.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);   
}

function updateName(){
    var formdata = document.getElementById("editName");
    var name = formdata.elements[0].value;

    var data ='n='+name;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Updated"){
                window.alert("You have updated your Name");
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open('POST', '../Server/detailUpdate/updateName.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);   
}

function updateEmail(){
    var formdata = document.getElementById("editEmail");
    var email = formdata.elements[0].value;

    var data ='e='+email;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Updated"){
                window.alert("You have updated your Email");
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open('POST', '../Server/detailUpdate/updateEmail.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);   
}


function updatePhone(){
    var formdata = document.getElementById("editPhone");
    var phone = formdata.elements[0].value;

    var data ='ph='+phone;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Updated"){
                window.alert("You have updated your Phone number");
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open('POST', '../Server/detailUpdate/updatePhone.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);   
}


function updatePass(){
    var formdata = document.getElementById("editPass");
    var pass = formdata.elements[0].value;

    var data ='p='+pass;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Updated"){
                window.alert("You have updated your Password");
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open('POST', '../Server/detailUpdate/updatePass.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data); 
}


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

function ProductUpdate(){
    var formdata = document.getElementById("products");
    var proName = formdata.elements[0].value;
    var proQuantity = formdata.elements[1].value;

    var data = 'n='+proName+'&q='+proQuantity;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Created"){
                window.alert("Created");
            }else if(this.responseText == "Updated"){
                window.alert("Updated");
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open('POST', '../Server/ProductUpdate.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);  
}

function DeleteProduct(){
    var formdata = document.getElementById("delete");
    var proName = formdata.elements[0].value;

    var xmlhttp = new XMLHttpRequest();


    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "Deleted"){
                window.alert("Deleted");
            }else{
                window.alert(this.responseText);
            }
        }
    };

    xmlhttp.open('POST', '../Server/ProductDelete.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);  

}