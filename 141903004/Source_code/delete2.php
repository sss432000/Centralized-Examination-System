

<?php
include('connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$sql = "UPDATE  profile SET course=NULL WHERE id=$id";
$result = $conn->query($sql);

header("Location: view2.php");
}

else

{
echo"error";
}
?>




 
 
 
 