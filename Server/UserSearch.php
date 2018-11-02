<?php
	session_start();

    $UserName=strtolower($_POST["u"]);

    require_once('config.php');

    $sql="SELECT ID, Name, Email, PhoneNum, Privilege FROM Accounts WHERE UserName='$UserName'";
    $data = $dbc->query($sql);

    $user = $data->fetch_assoc();
    if($_SESSION['priv']=='staff'){
        if($user != NULL){
            $info= "Account ID: " . $user["ID"] . "<br>Name: " .$user["Name"] . "<br>Email: " . $user["Email"] . "<br>UserName: " . $UserName . "<br>Phone Number: " .  $user["PhoneNum"] . "<br>Privilege: " . $user["Privilege"];
            echo $info;
        }else {
            echo "No Account with that UserName";
        }
    }else{
        echo "Please Login as staff";
    }


?>