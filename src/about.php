<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/about.css">
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
	<li class="menu"><a href="#">About Us</a></li>
	<li class="menu"><a href="addItems.html">Add New Items</a></li>
</ul>
<center>

<?php
	define("companyName", "ABC Mobiles");
	
	echo "<h2> About " . companyName . "</h2>" ;
	echo "<h4>This page is mainly about the "  . companyName . " company.</h4>";
	
	$sold = 75;
	$total = 100;
	echo "<h2>Shopping Cart Details</h2><br>";
	echo "<h2><table border = '1' width='50%'><tr><td>Number of Sold Items</td><td>".$sold ."</td></tr><tr><td>Total Number of Items</td><td>".$total ."</td></tr></table></h2>";


	function findPercentage() {
		$GLOBALS['percentage'] = ($GLOBALS['sold'] / $GLOBALS['total'] )*100; 
	}

	findPercentage();
	echo "<h3>Percentage of Sold Items - " . $percentage . "%<br></h3>";

	//Question 9 - Part a)  comparing dates
	$today = "Today is ".date("l");
	echo "<h3>".$today."</h3>";
	$c = date("Y-m-d");
	$currentDay = date_create($c);
	$shipDay = date_create("2019-09-21");
	
	$diff=date_diff($currentDay,$shipDay);
	
	echo "<h4>Number of days remaining for shipping - ".$diff->format("%R%a days")."</h4>";	
	
	if($diff->format("%R%a") > 0){
	$status = "To be Shipped";
	}
	else{
		$status = "Shipped";
	}
	echo "<h4><br>For ".$c." 24 items has ".$status."</h4>";
		
	//Question 9 - Part a)  Ends
	
?>
<div style="width:75%;align:center;">
  <div class="div1">
	<?php loopUsingFor(); ?>
</div>
<div class = "div2">
	<?php loopUsingForEach(); ?>
	</div>
	<div class="div1">
	<?php loopUsingWhile(); ?>
</div>
<div class = "div2">
	<?php loopUsingDoWhile(); ?>
	</div>
</div>


<?php
//Functions
function loopUsingFor(){
	$items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
	$keys = array_keys($items);
	echo "<h2>Output Using For Loop</br></h2>";
	echo  "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items<center></th></tr>";
	for($x = 0;$x < count($keys);$x++){
		echo "<tr><td><center>".$keys[$x] ."</center></td><td><center>".$items[$keys[$x]]."</center></td></tr>";
	}
	echo "</table>";	
}

function loopUsingForEach(){
	$items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
	
	echo "<h2>Output Using For Each Loop</br></h2>";
	echo  "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items</center></th></tr>";
	foreach($items as $x => $x_value){
		echo "<tr><td><center>".$x ."</center></td><td><center>".$x_value."</center></td></tr>";
	}
	echo "</table>";	
}

function loopUsingWhile(){
	$items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
	echo "<h2>Output Using While Loop</br></h2>";
	echo  "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items</center></th></tr>";
	while (list($key, $value) = each($items)) {
		echo "<tr><td><center>".$key ."</center></td><td><center>".$value."</center></td></tr>";
	}
	echo "</table>";	
}

function loopUsingDoWhile(){
	$items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
	$keys = array_keys($items);
	echo "<h2>Output Using Do-While Loop</br></h2>";
	echo  "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items</center></th></tr>";
	$x = 0;
	do{
		echo "<tr><td><center>".$keys[$x] ."</center></td><td><center>".$items[$keys[$x]]."</center></td></tr>";
		$x++;
	}
	while($x < count($keys));
	echo "</table>";	
}
?>


<br/><br/><br/><br/><br/><br/>
<center>
<h3 style="font-weight: bold; font-style: italic;">Created By : <a href="https://courseweb.sliit.lk/"> Your Name </a></h3>
</center>
</body>
</html>