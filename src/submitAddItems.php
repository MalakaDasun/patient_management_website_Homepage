<?php
    include_once 'config.php';
?>

<?php
	// Escape user inputs for security
	$name = $_POST["field1"];
	$code = $_POST["field2"];
	$price = $_POST["field3"];
	$qty = $_POST["field4"];
	$des = $_POST["field5"];
	 
	// Attempt insert query execution
	$sql = "INSERT INTO item (item_id,item_code, item_name,item_description,price,qty) VALUES ('','$code', '$name', '$des','$price','$qty')";
	if(mysqli_query($conn, $sql)){
		//echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:index.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($conn);

?>