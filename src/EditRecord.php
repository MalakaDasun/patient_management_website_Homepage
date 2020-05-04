<?php
    include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Items</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/itemStyles.css">
	<script src="js/myScript.js"></script>
</head>
<body>
<img class="logo" src="images/cart.png" width="200" height="200" alt="Shopping Cart Image">
<center>
	<h1>ABC Mobiles</h1>
	<h3 id="header">The Online Shopping Store</h3>
<hr id="test"/>
</center>
<ul class="menu">
	<li class="menu"><a href="index.php">Home</a></li>
	<li class="menu"><a href="news.html">News</a></li>
	<li class="menu"><a href="register.html">Contact</a></li>
	<li class="menu"><a href="about.php">About Us</a></li>
	<li class="menu"><a href="addItems.html">Add New Items</a></li>
</ul>
<br><br/>

<?php
$recordId = $_GET['id'];

$sql = "SELECT * FROM item where item_id=$recordId";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$code = $row["item_code"];
		$name = $row["item_name"];
		$des = $row["item_description"];
		$price = $row["price"];
		$quantity = $row["qty"];
		$id = $row["item_id"];
        }
}

?>

<form class="form-style-9" method="POST" action="submitUpdateItems.php">
<ul>
<li>
    <input type="text" name="field1" class="field-style field-split align-left" value= <?php echo $name ?> />
    <input type="text" name="field2" class="field-style field-split align-right" value= <?php echo $code ?> />

</li>
<li>
    <input type="text" name="field3" class="field-style field-split align-left" value= <?php echo $price ?> />
    <input type="number" name="field4" class="field-style field-split align-right" value= <?php echo $quantity ?> />
	<input type="hidden" name="field6" class="field-style field-split align-right" value= <?php echo $id ?> />
</li>
<li>
<textarea name="field5" class="field-style"><?php echo $des; ?></textarea>
</li>
<li>
<input type="Submit" value="Update Item" />
</li>
</ul>
</form>

</body>
</html>