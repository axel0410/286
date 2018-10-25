<?php

	

	if(isset($_POST["Username"])){
		$UserNamep=$_POST["Username"];
	}
	if(isset($_POST["Password"])){
		$Passwordp=$_POST["Password"];
	}
	$host="localhost";
	$user="X33173174";
	$password="X33173174";
	$dbname="X33173174";

	$dbc=mysqli_connect($host,$user,$password,$dbname);

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL"
			.mysqli_connect_error();
	}

	mysqli_select_db($dbc,$dbname);
	
	if($UserNamep!=""){
		$query="SELECT * FROM User WHERE UserName='$UserNamep'";
		$result=mysqli_query($dbc,$query);

		while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

			if($row[5]==$UserNamep && $row[6]==$Passwordp){
				echo "signed in!";
				header("Location:http://ceto.murdoch.edu.au/~33173174/Assignment2/main.html#page4");
			}
			else
				echo "Wrong Username or Password";
		};
	}
	else
		echo "No Username entered";
	
	

		


	

		


?>