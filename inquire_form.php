<?php
include( "config.php" );

if ( isset( $_POST[ 'inquire_submit' ] ) ) {
	$MiddleName = $_POST[ 'MiddleName' ];
	if ( $MiddleName == NULL ) {
		$FirstName = $_POST[ 'FirstName' ];
		$LastName = $_POST[ 'LastName' ];
		$Topic = $_POST[ 'Topic' ];
		$Email = $_POST[ 'Email' ];
		$Phone = $_POST[ 'Phone' ];
		$CompanyName = $_POST[ 'CompanyName' ];
		$ProjectBrief = $_POST[ 'ProjectBrief' ];

		$sql = "INSERT INTO tblinquire (FirstName, LastName, Topic, Email, Phone, CompanyName, ProjectBrief)
			VALUES ('$FirstName','$LastName','$Topic','$Email','$Phone','$CompanyName','$ProjectBrief')";

		if ( $conn->query( $sql ) === TRUE ) {

			require_once( 'email/class.phpmailer.php' );
			$mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = HOST;
			$mail->Port = PORT;
			$mail->IsHTML( true );
			//$mail->FromName = FROMNAME; 
			$mail->Username = USERNAME;
			$mail->Password = USERPASSWORD;
			$mail->SetFrom( 'no-reply@theopeneyes.com', 'OpenEyes Technologies Inc.' );

			$mail->Subject = "Inquire Generated - OpenEyes Technologies Inc.";
			$mail->Body = '
			<table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
				<tbody>
					<tr>
						<td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Technologies Logo" src="http://www.theopeneyes.com/oess/images/logo-email.png" /></a></td>
					</tr>
					<tr>
						<td style="padding:10px">
						
						<p><span style="font-size:13pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">The following person has sent inquire:</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">First name:&nbsp;' . $FirstName . '</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Last name:&nbsp;' . $LastName . '</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Topic:&nbsp;' . $Topic . '</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif; ">Email:&nbsp;' . $Email . '</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Phone:&nbsp;' . $Phone . '</span></span></span></p>
						
						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Company Name:&nbsp;' . $CompanyName . '</span></span></span></p>
						
						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Inquiry Brief:&nbsp;' . $ProjectBrief . '</span></span></span></p>
						
						</td>
					</tr>
					<tr>
						<td style="background-color:#a6ce39; background:#a6ce39; color:#333; padding:10px; text-align:center">&copy; 2019 OpenEyes Technologies Inc. - All rights reserved.</td>

					</tr>
				</tbody>
			</table>
			
			';
			$mail->AddAddress( INQUIRETO );

			if ( !$mail->Send() ) {
				?>
				<script>
					setTimeout( function () {
						swal( {
							title: "Something went wrong. Try again later.",
							type: "error",
							showConfirmButton: true,
							timer: 50000,
						}, function () {
							window.location = "";
						} );
					}, 2000 );
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
			$mail->IsHTML( true );
			//$mail->FromName = FROMNAME; 
			$mail->Username = USERNAME;
			$mail->Password = USERPASSWORD;
			$mail->SetFrom( 'info@theopeneyes.in', 'OpenEyes Technologies Inc.' );

			$mail->Subject = "Thank you for enquiry - OpenEyes Technologies Inc.";
			$mail->Body = '
			<table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
				<tbody>
					<tr>
						<td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Software Solution Logo" src="http://www.theopeneyes.com/oess/images/logo-email.png" /></a></td>
					</tr>
					<tr>
						<td style="padding:10px">
							<h1 style="font-family:Calibri,sans-serif;">Thank you for your enquiry</h1>
							<h3 style="font-family:Calibri,sans-serif;">Your message has been sent successfully.</h3>
							<p></p>
							<p style="font-family:Calibri,sans-serif">Thank you for your enquiry. It has been forwarded to the relevant department and will be dealt with as soon as possible. If your inquiry is urgent, please use the contact number provided in <a href="http://www.theopeneyes.in/">website</a>.</p>
							<p></p>
							<p style="font-family:Calibri,sans-serif">Kindly,<br><strong>OpenEyes Technologies Inc.</strong></p>
						</td>
					</tr>
					<tr>
						<td style="background-color:#a6ce39; background:#a6ce39; color:#333; padding:10px; text-align:center">&copy; 2019 OpenEyes Technologies Inc. - All rights reserved.</td>
					</tr>
				</tbody>
			</table>
			
			';
			$mail->AddAddress( $Email );

			if ( !$mail->Send() ) {
				?>
				<script>
					setTimeout( function () {
						swal( {
							title: "Something went wrong. Try again later.",
							type: "error",
							showConfirmButton: true,
							timer: 50000,
						}, function () {
							window.location = "";
						} );
					}, 2000 );
				</script>
				<?php
			} else {
				?>
				<script>
					// alert("Thank you for your enquiry");
					setTimeout( function () {
						swal( {
							title: "Thank you for your enquiry",
							type: "success",
							showConfirmButton: false,
							timer: 50000,
						}, function () {
							window.location = "";
						} );
					}, 2000 );
				</script>
				<?php
			}

		} else {
			?>
			<script>
				setTimeout( function () {
					swal( {
						title: "Something went wrong. Try again later.",
						type: "error",
						showConfirmButton: true,
						timer: 50000,
					}, function () {
						window.location = "";
					} );
				}, 2000 );
			</script>
			<?php
		}
	}
}
?>

<div class="contcact_form">
	<span class="close-menu icon-cross2 right-boxed"></span>
	<div class="contact-info">
		<form method="post" id="inquireform">
				<h2>Say Hi to us!</h2>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<input type="text" name="FirstName" placeholder="*First Name" pattern="[A-Za-z\/\s\.']{2,50}" required maxlength="50" oninvalid="this.setCustomValidity('Please enter your valid First Name')" oninput="setCustomValidity('')"/>
						<input type="text" name="MiddleName" id="MiddleName"/>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<input type="text" name="LastName" placeholder="*Last Name" pattern="[A-Za-z\/\s\.']{2,50}" required maxlength="50" oninvalid="this.setCustomValidity('Please enter your valid Last Name')" oninput="setCustomValidity('')"/>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<select name="Topic" required>
							<option value="" selected="">*Select a Topic</option>
							<option value="Cloud Consulting">Cloud Consulting</option>
							<option value="E-Commerce">E-Commerce</option>
							<option value="IOT">IOT</option>
							<option value="Mobile Apps">Mobile Apps</option>
							<option value="Mobile Games">Mobile Games</option>
							<option value="Other">Other</option>
							<option value="UI / UX">UI / UX</option>
							<option value="Wearables">Wearables</option>
							<option value="Web Development">Web Development</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<input type="text" name="Email" placeholder="*Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="50" required oninvalid="this.setCustomValidity('Please enter your Email Address in valid format')" oninput="setCustomValidity('')"/>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<input type="text" name="Phone" placeholder="*Phone Number" pattern="[0-9\-.\s]+" maxlength="13" required oninvalid="this.setCustomValidity('Please enter your Phone Number in xxx.xxx.xxxx format')" oninput="setCustomValidity('')"/>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<input type="text" name="CompanyName" placeholder="Company Name" maxlength="100" />
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-lg-12 col-md-12">
					<div class="form-group">
						<textarea name="ProjectBrief" placeholder="*Brief about your inquiry" required oninvalid="this.setCustomValidity('Please enter Brief about your inquiry')" oninput="setCustomValidity('')"></textarea>
					</div>
				</div>				
				<div class="clearfix"></div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<div class="g-recaptcha" data-sitekey="6LeGjHIUAAAAAJuV7KL2aoMQpKbgpdpR46TsWLJL"></div>
						<span class='inquire_error' style="display:none; font-size:12px; color:red;">Captcha is Required.</span>
					</div>
				</div>
				<div class="clearfix"></div>

				<button type="submit" id="inquiry_submit" name="inquire_submit" class="read_more">Submit</button>

		</form>
	</div>
</div>