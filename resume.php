<html lang="en">
<head>
  <title>Learn Feedback Demo - User Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <style>
	div.dataTables_wrapper {
        width: 99%;
        margin: 0 auto;
    }
  </style>
</head>
<body>
<div class="container">
<h1 style="padding:8px 0">Resume</h1>

<?php
/*
$servername = "localhost";
$username = "devbyo5_LFBDEMO";
$password = "o7N[;j]U*6y5";
$dbname = "devbyo5_LFBDEMO";
*/
///*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oeti";
//*/

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `CareerId`, `Position`, `FirstName`, `LastName`, `CurrentLocation`, `Email`, `Phone`, `Qualification`, `Experience`, `Salary`, `EmploymentType`, `Resume`, `CreatedOn` FROM `tblcareer` ORDER by `CareerId` DESC;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo '<table id="example" class="display nowrap" style="width:100%">';
	$sr = 1;
	echo "
		<thead>
		<tr>
		<th>No.</th>
		<th>Position Applied for</th>
		<th>Name</th>
		<th>Current Location</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Qualification</th>
		<th>Years of Experience</th>
		<th>Present Salary</th>
		<th>Type of Employment seeking</th>
		<th>Resume</th>
		<th>Applied On</th>
		</tr>
		</thead>
		<tbody>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "
		<tr>
		<td>".$sr."</td>
		<td>".$row["Position"]."</td>
		<td>".$row["FirstName"]." ".$row["LastName"]."</td>
		<td>".$row["CurrentLocation"]."</td>
		<td>".$row["Email"]."</td>
		<td>".$row["Phone"]."</td>
		<td>".$row["Qualification"]."</td>
		<td>".$row["Experience"]."</td>
		<td>".$row["Salary"]."</td>
		<td>".$row["EmploymentType"]."</td>
		<td><a href='".$row["Resume"]."'>Download</a></td>
		<td>".$row["CreatedOn"]."</td>
		</tr>
		";
		$sr++;
    }
	echo "</tbody></table>";
} else {
    echo "No Result Found";
}



mysqli_close($conn);
?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
} );
</script>
</body>
</html>