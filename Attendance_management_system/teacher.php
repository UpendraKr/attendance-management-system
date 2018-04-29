
<html>
   
   <head>
      <title>teacher</title>
	  <link rel="stylesheet" href="style.css"/>
<style>
#a{
	border: 3px solid black;
    border-radius:0px;
    margin-top:20px;
	margin-bottom:0px;
     margin-right:400px;
	margin-left:400px;   
	 height:55%;
	}
.x{
	border: 1px solid black;
	 height:24%;
	 margin:1px;
	  padding:0px;
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
<LI><a href="teacher.php">HOME</a></LI>

<LI><a HREF="tabout.php">ABOUT US</a></LI>
<LI><a href="tcontact.php">CONTACT US</a></LI>
</UL>
</div>
 
 <?php
session_start(); 
  if($_SESSION['teacher']==true)                                                                  // if you have logged in then only can print
 {      echo '<button><a href = "logout.php"> log Out</a></button>';
        echo  " WELCOME"." "."(Teacher) "." ".$_SESSION['teacher'];                                               //print session variable value
 }
 else
 {
	 header("location:index.html");
 }
 ?>
 
	   <div id="a">
	     <div class="x"><a href="attendancesub.php"><h2>TAKE ATTENDANCE</h2></a></div>
	  <div class="x"><a href="registeredstudent1.php"><h2>Registered students</h2></a></div>
	  <div class="x"><a href="unapprovedstudents1.php"><h2>Pending approval students</h2></a></div>
	  <div class="x"><a href=""><h2>OTHER</h2></a></div>
	  </div>
   </body>
   
</html>