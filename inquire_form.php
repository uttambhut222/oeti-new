<?php 
include("config.php");

if(isset($_POST['inquire_submit'])){
	
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Topic = $_POST['Topic'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$CompanyName = $_POST['CompanyName'];
	$ProjectBrief = $_POST['ProjectBrief'];
	
	$sql = "INSERT INTO tblinquire (FirstName, LastName, Topic, Email, Phone, CompanyName, ProjectBrief)
			VALUES ('$FirstName','$LastName','$Topic','$Email','$Phone','$CompanyName','$ProjectBrief')";
			
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
				$mail->SetFrom('no-reply@theopeneyes.com','No-Reply');
									
			$mail->Subject = "Inquire Generated - OpenEyes Technologies";
			$mail->Body = '
			<table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
				<tbody>
					<tr>
						<td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Technologies Logo" src="http://www.theopeneyes.com/images/logo.png" style="width:70px" /></a></td>
					</tr>
					<tr>
						<td style="padding:10px">
						
						<p><span style="font-size:13pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">The following person has sent inquire:</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">First name:&nbsp;'.$FirstName.'</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Last name:&nbsp;'.$LastName.'</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Topic:&nbsp;'.$Topic.'</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif; ">Email:&nbsp;'.$Email.'</span></span></span></p>

						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Phone:&nbsp;'.$Phone.'</span></span></span></p>
						
						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Company Name:&nbsp;'.$CompanyName.'</span></span></span></p>
						
						<p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Project Brief:&nbsp;'.$ProjectBrief.'</span></span></span></p>
						
						</td>
					</tr>
					<tr>
						<td style="background-color:#a6ce39; background:#a6ce39; color:#333; padding:10px; text-align:center">Copyright &copy; 2018 OpenEyes Technologies - All rights reserved.</td>
					</tr>
				</tbody>
			</table>
			
			';
			$mail->AddAddress(INQUIRETO);
			
			if(!$mail->Send())
			{
				echo "Mailer Error: " . $mail->ErrorInfo;
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
				$mail->SetFrom('no-reply@theopeneyes.com','No-Reply');
									
			$mail->Subject = "Thank You for Send us Inquire - OpenEyes Technologies Inc.";
			$mail->Body = '
			<table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
				<tbody>
					<tr>
						<td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Technologies Logo" src="http://www.theopeneyes.com/images/logo.png" style="width:70px!important; height:70px!important;" /></a></td>
					</tr>
					<tr>
						<td style="padding:10px">
							<p style="font-family:Calibri,sans-serif"><strong>Dear '.$FirstName.' '.$LastName.',</strong></p>
							<p></p>
							<p style="font-family:Calibri,sans-serif">We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number which is in website to talk to us. Otherwise, we will reply by email as soon as possible.</p>
							<p></p>
							<p style="font-family:Calibri,sans-serif">Talk to you soon,<br><strong>OpenEyes Technologies Inc.</strong></p>
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
				echo "Mailer Error: " . $mail->ErrorInfo;
			}
			else
			{	
				?><script>
						setTimeout(function() {
							swal({
								title: "Inquire Sent Sucessfully",
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
	
	/*echo '
	<script>
		alert("'.$FirstName.'");
	</script>
	';*/
}
?>
<div class="form_widget">
	<i class="glyphicon glyphicon-remove"></i>
  <div class="content">
    <h2>Inquire Now</h2>
	  <div class="separator inner_separator"><span class="dott"></span><span class="dott"></span><span class="dott"></span></div>
	  	<form action="" method="post">
        <div class="form-group">
          <input type="text" name="FirstName" placeholder="*First Name" pattern="[A-Za-z\/\s\.']{2,50}" required maxlength=50 oninvalid="this.setCustomValidity('Please enter your valid First Name')" oninput="setCustomValidity('')"/>
          <i class="flaticon-avatar"></i> </div>
        <div class="form-group">
          <input type="text" name="LastName" placeholder="*Last Name" pattern="[A-Za-z\/\s\.']{2,50}" required maxlength=50 oninvalid="this.setCustomValidity('Please enter your valid Last Name')" oninput="setCustomValidity('')"/>
          <i class="flaticon-avatar"></i> </div>
    <div class="form-group">
      <select name="Topic" required>
        <option value="" selected="">*Select a Topic</option>
        <option value="Mobile App">Mobile Apps</option>
        <option value="Mobile Games">Mobile Games</option>
        <option value="Custom Web Development">Web Development</option>
        <option value="E-Commerce">Ecommerce</option>
        <option value="Ui-ux">UI / UX</option>
        <option value="Wearables">Wearables</option>
        <option value="Iot">IOT</option>
        <option value="Cloud Consulting">Cloud Consulting</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <div class="form-group">
      <input type="text" name="Email" placeholder="*Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength=50 required oninvalid="this.setCustomValidity('Please enter your Email Address in valid format')" oninput="setCustomValidity('')" />
      <i class="flaticon-mail"></i> </div>
    <div class="form-group">
      <input type="text" name="Phone" placeholder="*Phone Number" pattern="[0-9\-.\s]+" maxlength=13 required oninvalid="this.setCustomValidity('Please enter your Phone Number in xxx.xxx.xxxx format')" oninput="setCustomValidity('')" />
      <i class="flaticon-phone-call"></i> </div>
    <div class="form-group">
      <input type="text" name="CompanyName" placeholder="*Company Name" required maxlength=100 oninvalid="this.setCustomValidity('Please enter your Company Name')" oninput="setCustomValidity('')" />
      <i class="flaticon-company"></i> </div>
    <div class="form-group">
      <textarea name="ProjectBrief" placeholder="*Brief about the project" required oninvalid="this.setCustomValidity('Please enter Brief about the project')" oninput="setCustomValidity('')"></textarea>
      <i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> </div>
    <div class="form-group">
	<div class="g-recaptcha" data-sitekey="6LeGjHIUAAAAAJuV7KL2aoMQpKbgpdpR46TsWLJL"></div>
    </div>
    <button type="submit" id="" name="inquire_submit" class="read_more">Submit</button>
	</form>
  </div>
</div>
