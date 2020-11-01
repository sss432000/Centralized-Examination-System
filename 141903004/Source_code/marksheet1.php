<?php

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


$sql = "SELECT * FROM course";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<body>

<style>
form{
	border : 1px solid #000;
    padding : 5px;
	width:35%;
	background-color : #FFEFD5;
	
}



input[type=submit], input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}


</style>

<form action="submit9.php" method="post">
 
 
<!--<input type="hidden" name="id" value="id">-->
    


 Course : <select name="course" size="1"> 
		

<?php while($row = $result->fetch_assoc()):;?>
<option><?php echo  $row['course_code'] ;?></option>
<?php endwhile;?>
</select>
<br>
<br>
<center><input type="submit" value="Submit"></center>
<br>
<br>
</form>
</body>
</html>


