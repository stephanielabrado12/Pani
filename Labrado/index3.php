<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM tbl_student ORDER BY studentid DESC");
?>

<html>
<head>	
<title>Homepage</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
<style type="text/css">
body{
    background-image: url(pic21.jpg);
    background-size:cover;
}

</style>
</head>

<body>
	<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a href="index.php">Home</a></li>
    <li><a href="booking.php">Hotel Bookings</a></li>
     <li><a href="index3.php">View Hotel Costumer</a></li>
    
   
  </ul>
 <ul class="nav navbar-nav navbar-right">
     
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>

</nav>
	
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		<td>Birth Date</td>
		<td>Address</td>
		<td>Contact</td>
		<td>Update</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['gender']."</td>";	
		echo "<td>".$row['birthdate']."</td>";	
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['contact']."</td>";
		echo "<td><a href=\"edit.php?id=$row[studentid]\">Edit</a> | <a href=\"delete.php?id=$row[studentid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
