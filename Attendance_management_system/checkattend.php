<?php
$subject = $_POST['subject'];
$id = $_POST['id'];

$mysqli = new mysqli("localhost","root","","project2");       // connect to server

if($subject=="physics")
{
	header("location: physics.php");
}
if($subject=="math")
{
	header("location: math.php");
}
if($subject=="chemistry")
{
	header("location: chemistry.php");
}
?>