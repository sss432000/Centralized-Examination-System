<?php
$a=$_POST{'faculty'};
$b=$_POST{'firstname'};
$c=$_POST{'lastname'};
$d=$_POST{'gender'};
$e=$_POST{'dept'};
$f=$_POST{'email_id'};
$g=$_POST{'mob_no'};
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

$sql = "INSERT INTO  profile(faculty,firstname,lastname,gender,dept,email_id,mob_no) VALUES('$a','$b','$c','$d','$e','$f','$g')";	

if($conn->query($sql) === TRUE) {
	echo "Profile created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<p>Click here to  <a href="http://localhost/project/view.php">View All Profiles</a></p>

</body>
</html>