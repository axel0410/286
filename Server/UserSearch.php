<?php
	session_start();

    $UserName=strtolower($_POST["usersearch"]);

    require_once('config.php');

    $sql="SELECT Name, Email, PhoneNum, Privilege FROM Accounts WHERE UserName='$UserName'";
    $data = $dbc->query($sql);

    $user = $data->fetch_assoc();
    if($user != NULL){
    	echo $user["Name"];
	}else {
    	echo "0 results";
	}

?>