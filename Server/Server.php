<?php
	$UserName=$_POST["Username"];
	$Password=$_POST["Password"];
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

	if($Username!=""){
		$query="SELECT * FROM User WHERE UserName='$UserName'";
	}
	else
		echo "alert("Wrong Username")";


		


	$result=mysqli_query($dbc,$query);

	$row=mysqli_fetch_array($result,MYSQLI_NUM))
		


?>