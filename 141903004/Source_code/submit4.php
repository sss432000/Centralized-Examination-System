<?php

$course=$_POST{'course'};
$id=$_POST{'search'};
$servername = "localhost";
$username = "root";
$password = "";
$dbname="db1";
//create connection
$conn = new mysqli($servername, $username, $password,$dbname);

//check connection
if  ($conn->connect_error)  {
	die("Connection failed: " . $conn->connect_error);
}
$c=implode(",",$course);
//foreach($course as $c){
//echo"you selected ".$c."<br>";

$sql = " UPDATE profile SET course='$c'  WHERE id LIKE '$id'";	

$result = $conn->query($sql);
//}
echo"Course assigned successfully";

?>


<!DOCTYPE html>
<html>
<body>

<p>Click here<a href="http://localhost/project/view2.php">View Assigned Courses</a></p>

</body>
</html>


