<?php
session_start();

	if(isset($_GET["name"])){
		$Searchq=$_GET["name"];
	}
	
    require_once('config.php');

	
	if($Searchq!=""){
		$query="SELECT * FROM Products WHERE Name LIKE '%$Searchq%'";
		$result=mysqli_query($dbc,$query);
	
		while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

			echo "<span style=color:#FFFFFF> ProductID: ".$row[0];
			echo "<br /> Name: ".$row[1];
			echo "<br /> Image:<br /><img src=".$row[2].">";
			echo "<br /> Quantity: ".$row[3]."<br /><br /> </span>";
	
		};
	}
	else{
		 echo'<span style="color:#FFFFFF">Nothing Entered!</span>';
		
	}

	mysqli_close($dbc);

?>