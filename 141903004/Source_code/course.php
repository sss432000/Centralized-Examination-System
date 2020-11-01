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



<form action="submit6.php" method="post">

Program:<select name="program" size="1">
 <option value="cm">Computer Engineering</option>
 <option value="it">Information Technology</option>
 <option value="sci">Science</option>
 
 
</select>
<br>
<br>

Course:<input type="text" name="coursecode"><br>
 <br>
 <br>
 
<center><input type="submit" value="submit"></center>
</form>
</body>
</html>