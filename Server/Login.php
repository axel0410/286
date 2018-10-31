<?php
	session_start();

	$user = strtolower($_POST['u']);
	$pass=$_POST["p"];

    require_once('config.php');	

	if($user!="" && $pass!=''){
		$query="SELECT * FROM Accounts WHERE UserName='$user'";
		$result=mysqli_query($dbc,$query);
		$row=mysqli_fetch_array($result,MYSQLI_NUM);
		if($row[5]==$pass){
			$_SESSION['user_id'] = $row[0];
			$_SESSION['priv'] = $row[6];
			echo "Signed in!";
		}else{
			echo "Wrong Username or Password";
		}
	}else{
		echo "No Username or Password entered";
	}
?>