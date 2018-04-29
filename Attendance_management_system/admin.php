<html>
   
   <head>
      <title>admin</title>
	  <link rel="stylesheet" href="style.css"/>
<style>
#a{
	border: 3px solid black;
    margin-top:20px;
     margin-right:400px;
	margin-left:400px;   
	 height:55%;
	}
.x{
	border: 1px solid black;
	 height:24%;
	 margin:1px;
	 background-color:#fa9f84;
	 text-align:center;
}
</style>
   </head>
   <body>
    <div id="header">
<h1 >Attendance Management System</h1>
</div>

<div id="navbar">
<UL>
<LI><a href="admin.php">HOME</a></LI>

<LI><a HREF="aabout.php">ABOUT US</a></LI>
<LI><a href="acontact.php">CONTACT US</a></LI>
</UL>
</div>
   
	  <button><a href = "logout.php"> log Out</a></button>
	  
	  <?php
 session_start(); 
  if($_SESSION['admin']==true)                                                                  // if you have logged in then only can print
 {
        echo  " WELCOME"." "."(Admin) "." ".$_SESSION['admin'];                                               //print session variable value
 }
 else
 {
	 header("location:index.html");
 }
 ?>
	  
	  
	 <div id="a">
	  <div class="x"><a  href="registeredstudent.php"><h2>Registered students</h2></a></div>
	  <div class="x"><a href="unapprovedstudents.php"><h2>Pending approval students</h2></a></div>
	  <div class="x"><a href="registeredteacher.php"><h2>Registered teachers</h2></a></div>
	  <div class="x"><a href="unapprovedteachers.php"><h2>Pending approval teachers</h2></a></div>
	  </div>
	  
	  
   </body>
   </html>
