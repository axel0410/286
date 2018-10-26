<?php

	if(isset($_POST["Category"])){
		$Searchq=$_POST["Category"];
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
	
	if($Searchq!=""){
		$query="SELECT * FROM Products WHERE Name LIKE '%$Searchq%'";
		$result=mysqli_query($dbc,$query);
	
		while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

			echo "ProductID: ".$row[0];
			echo "<br /> Name: ".$row[1];
			echo "<br /> Image:<br /><img src=".$row[2].">";
			echo "<br /> Quantity: ".$row[3]."<br /><br />";
	
		};
	}
	else
		echo "Nothing entered";

	mysqli_close($dbc);
?>