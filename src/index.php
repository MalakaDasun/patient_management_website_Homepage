<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
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
	<li class="menu"><a href="#">Home</a></li>
	<li class="menu"><a href="news.html">News</a></li>
	<li class="menu"><a href="register.html">Contact</a></li>
	<li class="menu"><a href="about.php">About Us</a></li>
	<li class="menu"><a href="addItems.html">Add New Items</a></li>
</ul>

<center>
<div class="productData tbl" style="border-style: groove; border-color: DarkBlue">
	<table border="1" width="100%">
	<tr>
		<th class="col1">Item ID</th>
		<th class="col2">Item Code</th>
		<th class="col1">Item Name</th>
		<th class="col2">Item Description</th>
		<th class="col1">Price</th>
		<th class="col2">Quantity</th>
		<th class="col1">Edit</th>
		<th class="col2">Delete</th>
	</tr>

<!--get data from table-->
<?php
$sql = "SELECT * FROM item";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = $row["item_id"];
        echo "<tr><td>".$row["item_id"]."</td>";
		echo "<td>".$row["item_code"]."</td>";
		echo "<td>".$row["item_name"]."</td>";
		echo "<td>".$row["item_description"]."</td>";
		echo "<td>".$row["price"]."</td>";
		echo "<td>".$row["qty"]."</td>";
		echo "<td><button type='submit'><a href='EditRecord.php?id=$id'>Edit</a></button></td>";
		echo "<td><button type='submit'><a href='DeleteRecord.php?id=$id'>Delete</a></button></td>";
    }
} else {
    echo "0 results";
}
echo "</table>";
?>

</div>
<h3 style="font-weight: bold; font-style: italic;">Created By : <a href="https://courseweb.sliit.lk/"> Your Name </a></h3>
</center>
</body>
</html>