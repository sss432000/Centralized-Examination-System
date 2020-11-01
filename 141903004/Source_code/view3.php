
<!--view.php-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Records</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id,program,course_code FROM course";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='black'>Id</font></th>
<th><font color='black'>Program</font></th>
<th><font color='black'>Course</font></th>



</tr>";

while($row = $result->fetch_assoc())
{

echo "<tr>";
echo '<td><font color="black">' . $row['id'] . '</font></td>';
echo '<td><font color="black">' . $row['program'] . '</font></td>';
echo '<td><font color="black">' . $row['course_code'] . '</font></td>';



echo "</tr>";

}

echo "</table>";
?>

</body>
</html>

