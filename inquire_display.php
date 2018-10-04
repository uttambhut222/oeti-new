<html lang="en">
<head>
  <title>Learn Feedback Demo - User Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include("config.php");


$sql = "SELECT `FirstName`, `LastName`, `Topic`, `Email`, `Phone`, `CompanyName`, `ProjectBrief`, `CreatedOn` FROM `tblinquire` ORDER by `InquireId` DESC;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo '<table id="tblinquire" class="table table-condensed table-bordered">';
	$sr = 1;
	echo "
		<thead>
		<tr>
		<th class='text-center'>No.</th>
		<th>Name</th>
		<th>Topic</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Company Name</th>
		<th>Project Brief</th>
		<th>Inquire On</th>
		</tr>
		</thead>
		<tbody>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "
		<tr>
		<td class='text-center'>".$sr."</td>
		<td>".$row["FirstName"]." ".$row["LastName"]."</td>
		<td>".$row["Topic"]."</td>
		<td>".$row["Email"]."</td>
		<td>".$row["Phone"]."</td>
		<td>".$row["CompanyName"]."</td>
		<td>".$row["ProjectBrief"]."</td>
		<td>".$row["CreatedOn"]."</td>
		</tr>
		";
		$sr++;
    }
	echo "
		</tbody>
		<tfoot>
		<tr>
		<th class='text-center'>No.</th>
		<th>Name</th>
		<th>Topic</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Company Name</th>
		<th>Project Brief</th>
		<th>Inquire On</th>
		</tr>
		</tfoot>
		</table>";
} else {
    echo "No Result Found";
}

mysqli_close($conn);

?>