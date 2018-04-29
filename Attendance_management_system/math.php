<?php                                                                              
session_start(); 
$id = $_SESSION['id'];


 $mysqli = new mysqli("localhost","root","","project2");                                                          // connect to sql
 $query = $mysqli->query("select * from math where id='$id' ");   
 

?>
<html>
<head>
	<title>your attendance</title>
	<style type="text/css">
		body {
			font-size: 15px;
			background-color: #9c9f84;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
<button><a href="profile.php">home</a></button>
	<table class="data-table">
		<caption class="title"><h1>Your attendance</h1></caption>
		<thead>
			<tr>
				<th>NO</th>
				<th>ID </th>
				<th>FIRST NAME</th>
			
		         <th>ATTENDANCE</th>
				<th>DATE</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no = 1;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['id'].'</td>
					<td>'.$row['firstname'].'</td>
					<td>'.$row['attend'].'</td>
					<td>'.$row['date'].'</td>
			         </tr>';
			$no++;
		}
				$total = $no -1;
		$data = $mysqli->query("select * from math where id='$id' and attend ='present' "); 
		$count = mysqli_num_rows($data);	
        echo "<br><br>"."TOTAL ATTENDANCE = ".$total;
		echo "<br><br>"."CURRENT ATTENDANCE = ".$count;
		if ($total !=0)
		{
		$percent = ($count / $total)*100;
		echo "<br><br>"."PERCENTAGE ATTENDANCE = ".$percent;
		}
		else{
			echo "<br><br>"."Oops ! You have not attended any classes yet .";
		}
		?>
		</tbody>
	</table>
</body>
</html>