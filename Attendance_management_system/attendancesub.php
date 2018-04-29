<html>
<head><title>attendance sub</title>
</head>
<style>
body{
	background-color: #9c9f84;
}
#a{
	
    margin-top:40px;
     margin-right:600px;
	margin-left:600px;   
	
}
</style>

<body>
<h1 align ="center">Select a subject</h1>
<div id="a">
<table>
<form action="attendancesub.php" method ="post">
<tr>
<td> <select name="subject">
    <option value="physics">physics</option>
    <option value="math">math</option>
    <option value="chemistry">chemistry</option>
  
  </select></td>
<td><input type="submit" value="submit"></td>
</tr>
</form>
</table>
</div>
<body>
</html>
<?php
$subject = $_POST['subject'];
//echo $subject;
if($subject=="physics")
{
	 header("Location: takeattendancephysics.php");
}
if($subject=="math")
{
	 header("Location: takeattendancemath.php");
}
if($subject=="chemistry")
{
	 header("Location: takeattendancechemistry.php");
}



?>