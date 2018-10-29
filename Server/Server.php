<?php

	

	if(isset($_POST["Username"])){
		$UserNamep=$_POST["Username"];
	}
	if(isset($_POST["Password"])){
		$Passwordp=$_POST["Password"];
	}

    require_once('config.php');	

	if($UserNamep!=""){
		$query="SELECT * FROM User WHERE UserName='$UserNamep'";
		$result=mysqli_query($dbc,$query);

		while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

			if($row[5]==$UserNamep && $row[6]==$Passwordp){
				echo "signed in!";
				//header("Location:http://ceto.murdoch.edu.au/~33173174/Assignment2/WebClient/main.html#page4");
			}
			else
				echo "Wrong Username or Password";
		};
	}
	else
		echo "No Username entered";
	
	

		


	
?>