<?php
	session_start();

	$name = $_POST['n'];
	$quantity = (int)$_POST['q'];

	require_once('config.php');

	$sqltest="SELECT Name FROM Products WHERE Name='$name'";
	$returned1 = $dbc->query($sqltest);

	$sqlnew="INSERT INTO Products (Name, Quantity) VALUES ('$name', '$quantity')";

	$sqlupdate="UPDATE Products SET Quantity='$quantity' WHERE Name='$name'";

		if($returned1->num_rows==0 || $returned1->num_rows > 1){
			if(mysqli_query($dbc, $sqlnew)){
				echo "Created";
			}else{
				echo "Failed1";
			}
		}else if($returned1->num_rows==1){
			if(mysqli_query($dbc, $sqlupdate)){
				echo "Updated";
			}else{
				echo "Failed2";
			}
		}else{
			echo "Failed3";
		}


	$dbc->close();

?>