<?php
	session_start();

	$pass = $_POST['p'];
	$ID=$_SESSION['user_id'];
	require_once('../config.php');
	
	$sql="UPDATE Accounts SET Password = '$pass' WHERE ID = $ID";
	
	if(mysqli_query($dbc, $sql)){
		echo "Updated";
	}else{
		echo mysqli_error($dbc);
	}
	$dbc->close();
?>