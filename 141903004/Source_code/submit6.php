<?php
$a=$_POST{'program'};
$b=$_POST{'coursecode'};

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

$sql = "INSERT INTO  course(program,course_code) VALUES('$a','$b')";	

if($conn->query($sql) === TRUE) {
	echo "Course added successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<p>Click here to  <a href="http://localhost/project/view3.php">View Added Courses</a></p>

</body>
</html>

