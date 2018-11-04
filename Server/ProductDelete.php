<?php
	session_start();

	$delete = $_POST['d'];

	require_once('config.php');

	$sqltest="SELECT Name FROM Products WHERE Name='$delete'";
	$returned1 = $dbc->query($sqltest);

	$sqldelete="DELETE FROM Products WHERE Name='$delete'";

	if($returned1->num_rows==1){
		if(mysqli_query($dbc, $sqldelete)){
			echo "Product Deleted";
		}else{
			echo "Deletion Failed";
		}
	}else{
		echo "No product with that name";
	}

	$dbc->close();

?>