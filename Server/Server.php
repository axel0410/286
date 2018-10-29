<?php

	session_start();

	if(isset($_POST["Username"])){
		$UserNamep=$_POST["Username"];
	}
	if(isset($_POST["Password"])){
		$Passwordp=$_POST["Password"];
	}

    require_once('config.php');	

	if($UserNamep!=""){
		$query="SELECT * FROM Accounts WHERE UserName='$UserNamep'";
		$result=mysqli_query($dbc,$query);

		while($row=mysqli_fetch_array($result,MYSQLI_NUM)){


			if($row[3]==$UserNamep && $row[5]==$Passwordp){
				$_SESSION['user_id'] = $row[0];
				$_SESSION['priv'] = $row[6];
				if($row[6]=='staff'){
					echo "Signed in as a staff member";
				}else{
					echo "Signed in!";
				}
			}
			else{
				echo "Wrong Username or Password";
			}
		}
	}
	else
		echo "No Username entered";
	
	

		


	
?>