<?php

$name1 = $_POST['firstname'];
$name2= $_POST['lastname'];
$email= $_POST['email'];
$id= $_POST['id'];
$password= $_POST['password'];
$type= $_POST['type'];
$gender= $_POST['gender'];


if($name1 == "" || $name2 == ""|| $email=="" || $type=="" || $gender=="" || $id=="")              //emty fields conditon
{
	echo "Pleasse fill all the fields . All the fields are required.";
}
else{
 
 $mysqli = new mysqli("localhost","root","","project2");   // connect to sql
 $mysqli->query("INSERT INTO table1 (firstname,lastname,email,id,password,type,gender) VALUES ('$name1','$name2','$email','$id','$password','$type','$gender')");    //
 
 echo"You have registered successfuly. Your approval request has been sent to admin/ teacher .";
 }
 
 
echo "<br><br>";
echo "<a href='index.html'><button>home</button></a>";
 
?>