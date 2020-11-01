<!DOCTYPE html>
<html>
<style>
form{
	border : 1px solid #000;
    padding : 5px;
	width:40%;
	background-color : #FFEFD5;
	
}



input[type=submit], input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}


</style>
<center><h3> Enter the Details:</h3></center>
<body>

<center>
<form action="submit1.php" method="post">
 
 
 Faculty type :
<select name="faculty" size="1">
 <option value="int">Internal</option>
 <option value="ext">External</option>
 
</select>
<br>
<br>

   First name :
   <input type="text" name="firstname">
   <br><br>
   Last name : 
   <input type="text" name="lastname">
   <br><br>
   
   Gender :
   male<input type="radio" name="gender" value="male">
   female<input type="radio" name="gender" value="female">
   <br><br>
   
   Department :
<select name="dept" size="1">
 <option value="cm">Computer Engineering</option>
 <option value="it">Information Technology</option>
 <option value="sci">Science</option>
 
</select>
   <br>
   <br>
  
   
   Email id : 
   <input type="text" name="email_id">
   <br><br>
   
   Mobile no : 
   <input type="text" name="mob_no">
   <br><br>
   <br>
   <br>
 <center>  <input type="submit" value="Submit">   </center>
 
 </center>
 
 </form>
 
 
 </body>
 </html>
 
 
 


 
 
 
 