
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

$sql = "SELECT id,firstname,lastname,course,marksheet FROM profile where marksheet='1'";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr>


<th><font color='black'>Id</font></th>

<th><font color='black'>Name</font></th>
<th><font color='black'>Course</font></th>

<th><font color='black'>marksheet</font></th>


</tr>";

while($row = $result->fetch_assoc())
{

echo "<tr>";
//echo '<td><form method="get" action=""> <input type="hidden" name="id" > <input type="checkbox" name="submitted" value="submitted"></td>';
echo '<td><font color="black">' . $row['id'] . '</font></td>';

echo '<td><font color="black">' . $row['firstname'] ." ". $row['lastname'] . '</font></td>';

echo '<td><font color="black">' . $row['course'] . '</font></td>';
echo '<td><font color="black">' . $row['marksheet'] . '</font></td>';


//echo '<td><b><font color="#663300"><a href="edit1.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
//echo '<td><b><font color="#663300"><a href="submit13.php?id=' . $row['id'] . '">Submit</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>

</body>
</html>

