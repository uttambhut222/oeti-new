<?php 
if(isset($_POST['career_apply'])){
	
	$target_dir = "resume/";
	$newfilename= round(microtime(true)).str_replace(" ", "", basename($_FILES["fileToUpload"]["name"]));
	$target_file = $target_dir . $newfilename;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
	// Allow certain file formats
	if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx") {
		$uploadOk = 0;
		?><script>
			setTimeout(function() {
				swal({
					title: "Sorry, only PDF, DOC & DOCX files are allowed.",
					type: "warning",
					showConfirmButton: true,
					}, function() {
						window.location = "";
					});
			}, 0);
	      </script>';
		<?php
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 1) {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$uploadOk = 1;
		} else {
			?><script>
				setTimeout(function() {
					swal({
						title: "Sorry, there was an error uploading your file.",
						type: "warning",
						showConfirmButton: true,
						}, function() {
							window.location = "";
						});
				}, 0);
			  </script>';
			<?php
		}
	}
	
	$Position = $_POST['Position'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$CurrentLocation = $_POST['CurrentLocation'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$Qualification = $_POST['Qualification'];
	$Experience = $_POST['Experience'];
	$Salary = $_POST['Salary'];
	$EmploymentType = $_POST['EmploymentType'];
	$Resume = $target_file;
	
	$sql = "INSERT INTO tblcareer (Position, FirstName, LastName, CurrentLocation, Email, Phone, Qualification, Experience, Salary, EmploymentType, Resume)
			VALUES ('$Position','$FirstName','$LastName','$CurrentLocation','$Email','$Phone','$Qualification','$Experience','$Salary','$EmploymentType','$Resume')";
	
	if ($uploadOk == 1)
	{
		if ($conn->query($sql) === TRUE) {
			
			require_once('email/class.phpmailer.php');
				$mail = new PHPMailer(); // create a new object
				$mail->IsSMTP(); // enable SMTP
				$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
				$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
				$mail->Host = HOST;
				$mail->Port = PORT;
				$mail->IsHTML(true);
				//$mail->FromName = FROMNAME; 
				$mail->Username = USERNAME;
				$mail->Password = USERPASSWORD;
				$mail->SetFrom('no-reply@theopeneyes.com','OpenEyes Technologies Inc.');
										
				$mail->Subject = "Inquire Generated for Career - OpenEyes Technologies";
				$mail->Body = '
				<table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
					<tbody>
						<tr>
							<td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Technologies Logo" src="http://www.theopeneyes.com/images/logo-email.png" /></a></td>
						</tr>
						<tr>
							<td style="padding:10px">
							
							<p><span style="font-size:13pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">The following person has apply for Position:&nbsp;<strong>'.$Position.'</strong></span></span></span></p>
							
							<p><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><strong>Personal Information:</strong></span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">First name:&nbsp;'.$FirstName.'</span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Last name:&nbsp;'.$LastName.'</span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Current Location:&nbsp;'.$CurrentLocation.'</span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Email:&nbsp;'.$Email.'</span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Phone:&nbsp;'.$Phone.'</span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Qualification:&nbsp;'.$Qualification.'</span></span></span></p>
							
							<p><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><strong>Employment:</strong></span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Year of Experience:&nbsp;'.$Experience.'</span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Present Salary:&nbsp;'.$Salary.'</span></span></span></p>
							
							<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Type Of Employment seeking:&nbsp;'.$EmploymentType.'</span></span></span></p>
							
							<p><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><strong>Please find attached resume...</strong></span></span></span></p>
							
							</td>
						</tr>
						<tr>
							<td style="background-color:#a6ce39; background:#a6ce39; color:#333; padding:10px; text-align:center">Copyright &copy; 2018 OpenEyes Technologies - All rights reserved.</td>
						</tr>
					</tbody>
				</table>
				
				';
				$mail->AddAttachment($target_file);
				$mail->AddAddress(CAREERTO);
				
				if(!$mail->Send())
				{
					?><script>
						setTimeout(function() {
							swal({
								title: "Something went wrong. Try again later.",
								type: "error",
								showConfirmButton: true,
							}, function() {
								window.location = "";
							});
						}, 0);
					</script>
				<?php
				}
				
				//------------------------------------------------
			
			$mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = HOST;
				$mail->Port = PORT;
				$mail->IsHTML(true);
				//$mail->FromName = FROMNAME; 
				$mail->Username = USERNAME;
				$mail->Password = USERPASSWORD;
				$mail->SetFrom('no-reply@theopeneyes.com','OpenEyes Technologies Inc.');
									
			$mail->Subject = "Thank you for your career enquiry - OpenEyes Technologies Inc.";
			$mail->Body = '
			<table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
				<tbody>
					<tr>
						<td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Technologies Logo" src="http://www.theopeneyes.com/images/logo-email.png" /></a></td>
					</tr>
					<tr>
						<td style="padding:10px">
							<h1 style="font-family:Calibri,sans-serif;">Thank You for Applying</h1>
							<p></p>
							<p style="font-family:Calibri,sans-serif">We have received your career inquire. Thanks for taking the time to apply for our position. We appreciate your interest in <strong>OpenEyes Technologies Inc.</strong> Our HR  department will be in contact with you.</p>
							<p style="font-family:Calibri,sans-serif">If you have got any questions you are welcome to contact us from details provided in <a href="http://www.theopeneyes.com/">website</a>.</p>
							<p></p>
							<p style="font-family:Calibri,sans-serif">Kindly,<br><strong>OpenEyes Technologies Inc.</strong></p>
						</td>
					</tr>
					<tr>
						<td style="background-color:#a6ce39; background:#a6ce39; color:#333; padding:10px; text-align:center">Copyright &copy; 2018 OpenEyes Technologies - All rights reserved.</td>
					</tr>
				</tbody>
			</table>
			
			';
			$mail->AddAddress($Email);
			
			if(!$mail->Send())
			{
				?><script>
						setTimeout(function() {
							swal({
								title: "Something went wrong. Try again later.",
								type: "error",
								showConfirmButton: true,
							}, function() {
								window.location = "";
							});
						}, 0);
					</script>
				<?php
			}
			else
			{	
				?><script>
						setTimeout(function() {
							swal({
								title: "Thank You for Applying",
								type: "success",
								showConfirmButton: false,
								timer: 2000,
							}, function() {
								window.location = "";
							});
						}, 0);
					</script>
				<?php
			}	
		} else {
			?><script>
					setTimeout(function() {
						swal({
							title: "Something went wrong. Try again later.",
							type: "error",
							showConfirmButton: true,
						}, function() {
							window.location = "";
						});
					}, 0);
				</script>
			<?php
		}
	}
}
?>