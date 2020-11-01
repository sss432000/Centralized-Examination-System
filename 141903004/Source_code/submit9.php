
<!--view.php-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Records</title>
</head>
<body>
<?php
$course=$_POST{'course'};

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

$sql = "SELECT id,firstname,lastname,course FROM profile WHERE course LIKE '%$course%'";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr>

<th><font color='black'>Firstname</font></th>
<th><font color='black'>Lastname</font></th>


<th><font color='black'>Course</font></th>
<th><font color='black'>Submit</font></th>

</tr>";

while($row = $result->fetch_assoc())
{

echo "<tr>";

echo '<td><font color="black">' . $row['firstname'] . '</font></td>';
echo '<td><font color="black">' . $row['lastname'] . '</font></td>';
echo '<td><font color="black">' . $row['course'] . '</font></td>';
//echo '<td><form method="get" action=""> <input type="hidden" name="id" > </td>';


//echo '<td><b><font color="#663300"><a href="submit11.php?id=' . $row['id'] . '">Submit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="submit11.php?id=' . $row['id'] . '">Submit</a></font></b></td>';
echo '<form method="get" action=""> <input type="hidden" name="id" > ';
echo '</form>';
echo "</tr>";

}


?>

</body>
</html>

