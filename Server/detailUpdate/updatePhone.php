<?php
	session_start();

	$phone = strtolower($_POST['ph']);
	$ID=$_SESSION['user_id'];
	require_once('../config.php');
	
	$sql="UPDATE Accounts SET PhoneNum = '$phone' WHERE ID = $ID";


    if(strlen($phone)<8){
    	echo "Phone number must be greater than 7 characters";
	}elseif(mysqli_query($dbc, $sql)){
		echo "Updated";
	}else{
		echo mysqli_error($dbc);
	}
	$dbc->close();
?>