<html lang="en">
<head>
  <title>Learn Feedback Demo - User Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" />
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  
  <style>
	div.dataTables_wrapper {
        width: 99%;
        margin: 0 auto;
    }
  </style>
  <script>
	function showUser(str) {
		if (str == "") {
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else { 
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","getuser.php?q="+str,true);
			xmlhttp.send();
		}
	}
  </script>
</head>
<body>
<div class="container">
<h1 style="padding:8px 0">Resume</h1>

<?php
include("config.php");

$sql = "SELECT `CareerId`, `Position`, `FirstName`, `LastName`, `CurrentLocation`, `Email`, `Phone`, `Qualification`, `Experience`, `Salary`, `EmploymentType`, `Resume`, `CreatedOn` FROM `tblcareer` ORDER by `CareerId` DESC;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo '<table id="example" class="display table table-striped table-bordered" style="width:100%">';
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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	
<script>
$(document).ready(function() {
    $('#example').DataTable( {
		"scrollX": true,
		"scrollY": '60vh',
        "scrollCollapse": true,
    } );
} );
</script>
</body>
</html>