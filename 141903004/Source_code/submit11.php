<?php
include('connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];



$sql = "UPDATE  profile SET marksheet=1 WHERE id='$id'";
$result = $conn->query($sql);

echo"Marksheet Assigned Successfully";
}

else

{
echo"error";
}
?>

<!DOCTYPE html>
<html>
<body>

<p>Click here<a href="http://localhost/project/submit15.php">View Assigned Marksheet</a></p>

</body>
</html>
