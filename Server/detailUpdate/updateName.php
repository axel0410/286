<?php
	session_start();

	$name = strtolower($_POST['n']);
	$ID=$_SESSION['user_id'];
	require_once('../config.php');
	
	$sql="UPDATE Accounts SET Name = '$name' WHERE ID = $ID";

    if(strlen($name)<4){
    	echo "Name must be greater than 3 characters";
    }elseif(mysqli_query($dbc, $sql)){
		echo "Updated";
	}else{
		echo mysqli_error($dbc);
	}
	$dbc->close();
?>