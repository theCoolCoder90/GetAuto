<?php 
$product = $_POST['product'];
$price = $_POST['price'];

//step 1 make connection with database
require("consql.php");

//Step 2 perform the database query
$query = "SELECT * FROM propost";
$result = mysqli_query($db, $query);

//Test if there is a error in query
if (!$result) {
	die("Database query failed.");
}

mysqli_close($db);
?>