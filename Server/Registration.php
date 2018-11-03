<?php
	session_start();

	$name = strtolower($_POST['n']);
	$emailC = strtolower($_POST['e']);
	$userC = strtolower($_POST['u']);
	$phone = $_POST['p'];
	$pass = $_POST['w'];


	if($_POST['pr']=='staff' && $_SESSION['priv']=='staff'){
		$priv='staff';
	}else{
		$priv='customer';
	}

	require_once('config.php');
	
	$sql1="SELECT Email FROM Accounts WHERE Email='$emailC'";
	$returned1 = $dbc->query($sql1);

	$sql2="SELECT UserName FROM Accounts WHERE UserName='$userC'";
	$returned2 = $dbc->query($sql2);

	$sqlCreate="INSERT INTO Accounts (Name, Email, UserName, PhoneNum, Password, Privilege)
    VALUES ('$name', '$emailC', '$userC', '$phone', '$pass', '$priv')";


    if(strlen($name)<4){
    	echo "Name must be greater than 3 characters";
    } elseif(strlen($pass)<4){
    	echo "Password must be greater than 3 characters";
    }elseif(strlen($userC)<4){
    	echo "Username must be greater than 3 characters";
    }elseif(strlen($phone)<8){
    	echo "Phone number must be greater than 7 characters";
    }elseif(strlen($emailC)<1){
    	echo "Invalid email";
    }elseif($returned1->num_rows==0){
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