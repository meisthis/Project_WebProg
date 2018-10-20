<?php
require_once('../db.php')
$conn = mysqli_connect("localhost", "root", "", "cookit");
if($conn-> connect_error) {
	die("Connection failed:". $conn-> connect_error);
}
$result = array();
$item_ingridient = $_POST['ingridient'];
$query = "SELECT * FROM Ingridient WHERE item_ingridient = '".$item_ingridient"'";
$temp = mysqli_query($conn, $query) or die($conn->error);
$result["numrow"] = mysqli_num_row($temp);
if($result["numrow"] > 0) {
	while($row = mysqli_fetch_assoc($temp)) {
		$result["data"][] = $row;
	}
}else {
	echo "0 result";
}
?>

