<?php

$attend= $_POST['attend'];
$id=$_POST['id'];
 $mysqli = new mysqli("localhost","root","","project2");   
 $query = $mysqli->query("select * from student where id='$id' ");   
 $row = mysqli_fetch_array($query);



$firstname= $row['firstname'];
$date= date('d.m.Y');

/*echo $id;
echo "<br>";
echo $firstname;
echo "<br>";
echo $attend;
echo "<br>";
echo $date;
*/

$var = $mysqli->query("INSERT INTO physics (id,firstname,attend,date) VALUES ('$id','$firstname','$attend','$date' )");
if($var)
{
 header("location:takeattendancephysics.php");
	}

?>