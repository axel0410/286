<?php

	if(isset($_POST["search"])){
		$Searchq=$_POST["search"];
	}
	
    require_once('config.php');

	
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