<?php

	$name = strtolower($_POST['n']);
	$emailC = strtolower($_POST['e']);
	
	$phone = $_POST['p'];
	$pass = $_POST['w'];

	require_once('config.php');
	
	$sql1="SELECT Email FROM Accounts WHERE Email='$emailC'";
	$returned1 = $dbc->query($sql1);

	$sql2="SELECT UserName FROM Accounts WHERE UserName='$userC'";
	$returned2 = $dbc->query($sql2);

	$sqlCreate="INSERT INTO Accounts (Name, Email, UserName, PhoneNum, Password, Privilege)
    VALUES ('$name', '$emailC', '$userC', '$phone', '$pass', 'customer')";

	if($returned1->num_rows==0){
		if($returned2->num_rows==0){
			if(mysqli_query($dbc, $sqlCreate)){
				echo "Valid";
			}else{
				echo myswli_error($dbc);
			}
		}else{
			echo "Username aleady in use";
		}
	}else{
		echo "Email aleady in use";
	}
	
	$dbc->close();
?>