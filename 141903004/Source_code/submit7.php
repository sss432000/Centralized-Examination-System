

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 
<body>
<?php
$dept=$_POST{'dept'};
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

$sql = "SELECT program,course_code FROM course WHERE program LIKE '$dept' ";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='black'>Department</font></th>
<th><font color='black'>Course</font></th>


</tr>";

while($row = $result->fetch_assoc())
{
echo '<td><font color="black">' . $row['program'] . '</font></td>';

echo '<td><font color="black">' . $row['course_code'] . '</font></td>';


//echo '<td><b><font color="#663300"><a href="assign.php?id=' . $row['id'] . '">Assign</a></font></b></td>';
//echo '<td><b><font color="#663300"><a href="delete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';

echo "</tr>";

}

echo "</table>";
?>

</body>
</html>

