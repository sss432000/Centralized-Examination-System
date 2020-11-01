<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}



#header{
	width:100%;
	height:120px;
	background:#2F4F4F;
	color:white;
}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 300px;
  height: 100%;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  
  border-bottom:1px solid grey;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}




	

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 80%;
  border: none;
  height: 100%;
  background-color:#C0C0C0;
}


#adminLogo{
	height:88px;
	background:white;
	border-radius:50px;
}




</style>
</head>
<body>


<div id="header">
<center><img src="admin_logo.png" alt="adminLogo" id="adminLogo"><br>Welcome to Admin Panel!
</center>
</div>




<!--<h2>Vertical Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>-->

<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'create_profile')" id="defaultOpen">Create Profile</button>
   <button class="tablinks" onclick="openTab(event, 'add_course')">Add Course</button>
      <button class="tablinks" onclick="openTab(event, 'assign_course')">Assign Courses</button>
	  <button class="tablinks" onclick="openTab(event, 'view_data')">View Data</button>
 <button class="tablinks" onclick="openTab(event, 'assign_marksheet')">Assign Marksheet</button>
 <button class="tablinks" onclick="openTab(event, 'submit_marksheet')">Submit Marksheet</button>

	  <button class="tablinks" onclick="openTab(event, 'view_pie')">View pieChart</button>

    <button class="tablinks" onclick="openTab(event, 'bill')">Generate Bill</button>
</div>

<div id="create_profile" class="tabcontent">
 <?php include 'profile.php'?>

</div>


<div id="add_course" class="tabcontent">
 <?php include 'course.php'?>

</div>


<div id="view_data" class="tabcontent">
  <h3>View Data</h3>

<p>Click here to  <a href="http://localhost/project/view.php">View All Profiles</a></p>
<p>Click here to  <a href="http://localhost/project/view3.php">View Courses</a></p>

<p>Click here to  <a href="http://localhost/project/view2.php">View Assigned Courses</a></p>
<p>Click here to  <a href="http://localhost/project/submit15.php">View Assigned Marksheet</a></p>
<p>Click here to  <a href="http://localhost/project/submit14.php">View Submitted Marksheet</a></p>

  </div>

<div id="view_pie" class="tabcontent">
  <h3>View PieChart</h3>
  <?php include 'pie.php';  ?>
</div>


<div id="assign_course" class="tabcontent">
   <?php include 's1.php';  ?>
  
</div>

<div id="assign_marksheet" class="tabcontent">
   <?php include 'marksheet1.php';  ?>
  
</div>

<div id="submit_marksheet" class="tabcontent">
   <?php include 'marksheet_sub.php'; ?>
   
  
</div>


<div id="bill" class="tabcontent">
<?php include 'bill.php';?>
 
</div>


<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
 
  
</body>
</html> 
