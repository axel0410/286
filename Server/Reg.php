<?php

    $Name=$_POST["name"];

    $Email=$_POST["email"];

    $UserName=$_POST["uname"];

    $Number=$_POST["number"];

    $Password=$_POST["password"];
    
    $host="localhost";
    $user="X33173174";
    $password="X33173174";
    $dbname="X33173174";

    $dbc=mysqli_connect($host,$user,$password,$dbname);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL"
            .mysqli_connect_error();
    }

    mysqli_select_db($dbc,$dbname);

    $sql="INSERT INTO Accounts (Name, Email, UserName, PhoneNum, Password)
    VALUES ('$Name', '$Email', '$UserName', '$Number', '$Password')";

    if(mysqli_query($dbc, $sql)){
        echo "Account Created";
    }else{
        echo "Error<br>";
        echo mysqli_error($dbc);
    }

    
?>