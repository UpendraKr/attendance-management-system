<?php

 $email2=$_POST['hidden2'];
 $mysqli = new mysqli("localhost","root","","project2");
 $mysqli->query("DELETE FROM table1 where email='$email2' "); 
 header("location: unapprovedteachers.php");
 
?>
