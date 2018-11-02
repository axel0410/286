<?php
session_start();

	if(isset($_GET["name"])){
		$Searchq=$_GET["name"];
	}
	
    require_once('config.php');

	

	
	

	$sql2="SELECT * FROM Products WHERE ProductID='$Searchq'";
	$result2=mysqli_query($dbc,$sql2);

	$sql3="SELECT Quantity FROM Products WHERE ProductID='$Searchq'";
	$result3=mysqli_query($dbc,$sql3);

	while($row1=mysqli_fetch_array($result3,MYSQLI_NUM)){
		if($row1[0] > 0){
			$query="UPDATE Products SET Quantity=Quantity-1 WHERE ProductID='$Searchq'";
			$result=mysqli_query($dbc,$query);

			while($row=mysqli_fetch_array($result2,MYSQLI_NUM)){
				echo "<span style=color:#FFFFFF>";
				echo "<br /> Name: ".$row[1];
				echo "<br />New Quantity: ".$row[3];".</span>";	
				echo "<br />Order Accepted";
			};

		}
		else
			while($row=mysqli_fetch_array($result2,MYSQLI_NUM)){
				echo "<span style=color:#FFFFFF>";
				echo "<br /> Name: ".$row[1];
				echo "<br />New Quantity: ".$row[3];".</span>";	
				echo "<br />Order Rejected(out of Stock)";
			};
		
	};

	

	
	

	
	

	mysqli_close($dbc);

?>