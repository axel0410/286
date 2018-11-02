<?php
	session_start();

	$email = strtolower($_POST['e']);
	$ID=$_SESSION['user_id'];
	require_once('../config.php');

	$sqltest="SELECT Email FROM Accounts WHERE Email='$email'";
	$returned = $dbc->query($sqltest);
	
	$sql="UPDATE Accounts SET Email = '$email' WHERE ID = $ID";


	if(strlen($email)<1){
    	echo "Invalid email";
    }elseif($returned->num_rows==0){
		if(mysqli_query($dbc, $sql)){
			echo "Updated";
		}else{
			echo "Error updating email";
		}
	}else{
		echo "Email already exists try again";
	}
	$dbc->close();
?>