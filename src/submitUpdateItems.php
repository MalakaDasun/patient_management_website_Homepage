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
	$id = $_POST["field6"];
	
	//echo $_GET['id'];
	// Attempt update query execution
	
	$sql = "UPDATE item SET item_code='$code', item_name='$name',item_description='$des',price='$price',qty='$qty' WHERE item_id = '$id'";
	
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