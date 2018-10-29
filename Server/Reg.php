<?php

    $Name=$_POST["name"];

    $Email=$_POST["email"];

    $UserName=$_POST["uname"];

    $Number=$_POST["number"];

    $Password=$_POST["password"];

    require_once('config.php');

    $sql="INSERT INTO Accounts (Name, Email, UserName, PhoneNum, Password, Privilege)
    VALUES ('$Name', '$Email', '$UserName', '$Number', '$Password', 'customer')";

    if(mysqli_query($dbc, $sql)){
        echo "Account Created";

    }else{
        echo "Error<br>";
        echo mysqli_error($dbc);
    }

    
?>