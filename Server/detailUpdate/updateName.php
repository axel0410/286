<?php
	session_start();

	$name = strtolower($_POST['n']);
	$ID=$_SESSION['user_id'];
	require_once('../config.php');
	
	$sql="UPDATE Accounts SET Name = '$name' WHERE ID = $ID";

	if(mysqli_query($dbc, $sql)){
		echo "Updated";
	}else{
		echo mysqli_error($dbc);
	}
	$dbc->close();
?>