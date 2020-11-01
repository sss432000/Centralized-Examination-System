<?php
$id = $_POST['search'];
$nocp = $_POST['checked_papers'];

$rate = $_POST['rate'];

$amount=$nocp*$rate;
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


$sql = " UPDATE profile SET checked_papers='$nocp',rate='$rate',amount='$amount'  WHERE id LIKE '$id'";
if($conn->query($sql) === TRUE) {
	echo "Bill generated successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<body>

<p>Click here<a href="http://localhost/project/pdf2.php">Generate pdf for the Bill</a></p>

</body>
</html>
