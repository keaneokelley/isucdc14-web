<?php
<<<<<<< HEAD
$con=mysqli_connect("localhost","[redacted]","[redacted]", "site");

if(mysqli_connect_errno()) {
	echo "Failed to connect to DB";
}
$sanitized_query = "SELECT * FROM lawyers";
=======
$con=mysqli_connect("localhost","root","cdc", "site");

if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: mysqli_connect(\"10.0.55.18\",\"root\",\"cdc\",\"site\"); --> " . mysqli_connect_error();
}
$sanitized_query = $_GET["query"];
>>>>>>> 75c9c2037bf74290ceb5a8fc3d43c586e7f56dfd
$result = mysqli_query($con,$sanitized_query);
$toreturn = "[";
while ($row = mysqli_fetch_array($result)) {
	if ($toreturn != "[") {$toreturn .= ",";}
	$toreturn .= '{"fname":"' . $row["fname"] . '",';
	$toreturn .= '"lname":"' . $row["lname"] . '",';
	$toreturn .= '"image":"' . $row["image"] . '",';
	$toreturn .= '"bio":"' . $row["bio"] . '"}';
}
$toreturn .= ']';
echo $toreturn . " ";
mysqli_close($con);
?>
