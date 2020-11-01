<?php
include('connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];



$sql = "UPDATE  profile SET submitted=1 WHERE id='$id'";
$result = $conn->query($sql);

echo"Marksheet submitted Successfully";
}

else

{
echo"error";
}
?>

<!DOCTYPE html>
<html>
<body>

<p>Click here<a href="http://localhost/project/submit14.php">View Submitted Marksheet</a></p>

</body>
</html>
