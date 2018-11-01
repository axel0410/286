<?php
session_start();

	if(isset($_GET["name"])){
		$Searchq=$_GET["name"];
	}
	
    require_once('config.php');

	
	
	$query="SELECT * FROM Products WHERE ProductID='$Searchq'";
	$result=mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
		echo "<span style=color:#FFFFFF>";
		echo "<br /> Name: ".$row[1];
		echo "<br /><img src=".$row[2]."></span>";
		
	
	};

	mysqli_close($dbc);

?>