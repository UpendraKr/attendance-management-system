<?php

 $email1=$_POST['hidden1'];  

 $mysqli = new mysqli("localhost","root","","project2");   
 $data = $mysqli->query("select * from table1 where email='$email1' ");
 $row1 = mysqli_fetch_array($data);
 $name1 =  $row1['firstname'] ;
 $name2 =  $row1['lastname'] ;
 $email =  $row1['email'] ;
 $id = $row1['id'] ;
 $password = $row1['password'] ;
 $gender = $row1['gender'] ;
 
 $query = $mysqli->query("INSERT INTO teacher (firstname,lastname,email,id,password,gender) VALUES ('$name1','$name2','$email','$id','$password','$gender'); ");  

 if($query)                                                                                               //check if value inserted then delete row from local table1
 {   
       $mysqli->query("DELETE FROM table1 where email='$email1' "); 
	    header("location: unapprovedteachers.php");
 }

?>