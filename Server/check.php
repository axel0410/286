<?php

	$Echeck = $_GET['e'];
	$Ucheck = $_GET['u'];


	require_once('config.php');
	
	$sql1="SELECT Email FROM Accounts WHERE Email='$Echeck'";
	$returned1 = $dbc->query($sql1);

	$sql2="SELECT UserName FROM Accounts WHERE UserName='$Ucheck'";
	$returned2 = $dbc->query($sql2);

	if($returned1->num_rows==0){
		if($returned2->num_rows==0){
			echo "Valid";
		}else{
			echo "Username aleady in use";
		}
	}else{
		echo "Email aleady in use";
	}

	$dbc->close();
?>