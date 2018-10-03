<?php 
if(isset($_POST['career_apply'])){
	
	$target_dir = "resume/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
				$mail->FromName = FROMNAME; 
				$mail->Username = USERNAME;
				$mail->Password = USERPASSWORD;
				$mail->SetFrom(USERNAME);
										
				$mail->Subject = "Inquire Generated - OpenEyes Technologies";
				$mail->Body = '
				<table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
					<tbody>
						<tr>
							<td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Technologies Logo" src="http://www.theopeneyes.com/img/logo.png" style="width:70px" /></a></td>
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
					echo "Mailer Error: " . $mail->ErrorInfo;
				}
				else
				{	
					?><script>
							setTimeout(function() {
								swal({
									title: "Form Submit Sucessfully",
									type: "success",
									showConfirmButton: false,
									timer: 2000,
								}, function() {
									window.location = "";
								});
							}, 0);
						</script>
					<?php
					?>
					<!--<script>
					alert("Thank You! Your Inquire sent successfully!");	
					</script>-->
					<?php
				}
				
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	
	/*echo '
	<script>
		alert("'.$FirstName.'");
	</script>
	';*/
}
?>
<!-- Form Section -->
<div class="career_form" id="apply_online">
	<div class="white_bg">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-sm-12">
					<div class="form_section">
						<h2>Apply Now</h2>
						<div class="separator inner_separator"><span class="dott"></span><span class="dott"></span><span class="dott"></span></div>
						<form action="" method="post" enctype="multipart/form-data">
						<div class="row">
						  <div class="col-md-4 col-sm-4">
							<div class="form-group">
							  <select name="Position" required>
								<option value="" selected="">*Position Applied For</option>
								<option value="Sr. PHP Developer">Sr. PHP Developer</option>
								<option value="Content Writer" >Content Writer</option>
								<option value="US IT Recruiter">US IT Recruiter</option>
								<option value="Lead Co-ordinator">Lead Co-ordinator</option>
							  </select>
							</div>
						   </div>
						  </div>
							<div class="clearfix"></div>
							<h3>Personal Information</h3>
							<div class="row">
							  <div class="col-md-4 col-sm-4">
								<div class="form-group">
								  <input type="text" name="FirstName" placeholder="*First Name" pattern="[A-Za-z\/\s\.']{2,50}" required maxlength=50 oninvalid="this.setCustomValidity('Please enter your valid First Name')" oninput="setCustomValidity('')" />
								  <i class="flaticon-avatar"></i> </div>
							  </div>
								<div class="col-md-4 col-sm-4">
								<div class="form-group">
								  <input type="text" name="LastName" placeholder="*Last Name" pattern="[A-Za-z\/\s\.']{2,50}" required maxlength=50 oninvalid="this.setCustomValidity('Please enter your valid Last Name')" oninput="setCustomValidity('')"/>
								  <i class="flaticon-avatar"></i> </div>
							  </div>
								 <div class="col-md-4 col-sm-4">
								<div class="form-group">
								  <input type="text" name="CurrentLocation" placeholder="*Current Location" pattern="[A-Za-z\/\s\.']{2,50}" required maxlength=50 oninvalid="this.setCustomValidity('Please enter your valid Current Location')" oninput="setCustomValidity('')" />
								  <i class="flaticon-placeholder"></i> </div>
							  </div>
								<div class="clearfix"></div>
						  	  <div class="col-md-4 col-sm-4">
								 <div class="form-group">
      								<input type="text" name="Email" placeholder="*Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength=50 required oninvalid="this.setCustomValidity('Please enter your Email Address in valid format')" oninput="setCustomValidity('')"/>
      								<i class="flaticon-mail"></i> </div>
							  </div>
								<div class="col-md-4 col-sm-4">
								  <div class="form-group">
								  <input type="text" name="Phone" placeholder="*Phone Number" pattern="[0-9\-.\s]+" maxlength=13 required oninvalid="this.setCustomValidity('Please enter your Phone Number in xxx.xxx.xxxx format')" oninput="setCustomValidity('')" />
								  <i class="flaticon-phone-call"></i> </div>
								</div>
						 <div class="col-md-4 col-sm-4">
								<div class="form-group">
								    <select name="Qualification" required>
										<option value="" selected="">*Qualification</option>
										<option value="B.E Graduate">B.E Graduate</option>
										<option value="M. Tech">M.Tech</option>
										<option value="M C A">M C A</option>
										<option value="B C A">B C A</option>
										<option value="B A">B A</option>
										<option value="B Com">B Com</option>
										<option value="B.Sc">B.Sc</option>
										<option value="Diploma">Diploma</option>
										<option value="Other">Other</option>
							  		</select>
							 	</div>
							  </div>
							</div>
						<div class="clearfix"></div>
							<h3>Employment</h3>
							<div class="row">
							  <div class="col-md-4 col-sm-4">
								<div class="form-group">
								  <input type="text" name="Experience" placeholder="*Years Of Experience" pattern="[0-9\-.\s]+" maxlength=2 required oninvalid="this.setCustomValidity('Please enter year of Experience')" oninput="setCustomValidity('')" required />
								  <i class="flaticon-calendar-1"></i> </div>
							  </div>
								<div class="col-md-4 col-sm-4">
								<div class="form-group">
								  <input type="text" name="Salary" placeholder="*Present Salary (per Year)" pattern="[0-9\-.\s]+" maxlength=8 required oninvalid="this.setCustomValidity('Please enter your current salary')" oninput="setCustomValidity('')" required />
								  <i class="flaticon-money-1"></i> </div>
							  </div>
								 <div class="col-md-4 col-sm-4">
								<div class="form-group">
								    <select name="EmploymentType" required>
										<option value="" selected="">*Type Of Employment seeking</option>
										<option value="Part time">Part time</option>
										<option value="Full time">Full time</option>
										<option value="Contract">Contract</option>
										<option value="Consulting">Consulting</option>
										<option value="Freelancing">Freelancing</option>
										<option value="Night Shift">Night Shift</option>
							  </select></div>
							  </div>
							</div>
							<h3>Resume (PDF or Word File)</h3>
							<div class="row">
							  <div class="col-md-4 col-sm-4">
								<div class="form-group file_upload">
								  <input type="text" placeholder="*No File Selected" /><input type="file" name="fileToUpload" id="fileToUpload" required/>
								  <i class="flaticon-upload-3"></i>
								  </div>
								</div>
							</div>
						<div class="form-group">
						<div class="g-recaptcha" data-sitekey="6LeGjHIUAAAAAJuV7KL2aoMQpKbgpdpR46TsWLJL"></div>
						</div>
						<button type="submit" name="career_apply" class="read_more">Apply</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="clearfix"></div>
<!-- End Form Section -->