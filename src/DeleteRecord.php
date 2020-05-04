<?php
    include_once 'config.php';
?>

<?php
	$recordId = $_GET['id'];
	// Escape user inputs for security
	//$name = $_POST["field1"];
	//$code = $_POST["field2"];
	//$price = $_POST["field3"];
	//$qty = $_POST["field4"];
	//$des = $_POST["field5"];
	//$id = $_POST["field6"];
	
	//echo $_GET['id'];
	// Attempt delete query execution
	
	$sql = "DELETE FROM item WHERE item_id = '$recordId'";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:index.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	//Close connection
	mysqli_close($conn);

?>