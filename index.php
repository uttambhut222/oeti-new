
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link type="image/x-icon" rel="shortcut icon" href="oess/oess/images/favicon.ico"/>
	<title>OpenEyes Technologies Inc.</title>
	<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"/>

	<link rel="stylesheet" href="oess/oess/css/owl.carousel.css">
	<link rel="stylesheet" href="oess/oess/css/timeline.css">
	<link type="text/css" rel="stylesheet" href="oess/oess/css/flaticon.css"/>
	<link type="text/css" rel="stylesheet" href="oess/oess/css/sweetalert2.min.css"/>
	<link href="oess/oess/css/style.css" rel="stylesheet" media="screen">
	
	
	<!-- start style for process slider -->
	<link href="oess/oess/css/theme.css" rel="stylesheet" type="text/css">
	<!-- end style for process slider -->
	
	
</head>
<body class="body-full-page">
	<div class="loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<div class="click-capture"></div>

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
                
    $mail->Subject = "Inquire Generated - OpenEyes Technologies";
    $mail->Body = '
    <table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
      <tbody>
        <tr>
          <td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Technologies Logo" src="http://www.theopeneyes.com/images/logo-email.png" /></a></td>
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
          <td style="background-color:#a6ce39; background:#a6ce39; color:#333; padding:10px; text-align:center">Copyright &copy; 2020 OpenEyes Technologies - All rights reserved.</td>
        </tr>
      </tbody>
    </table>
    
    ';
    $mail->AddAddress(INQUIRETO);
    
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
                
    $mail->Subject = "Thank you for enquiry - OpenEyes Technologies Inc.";
    $mail->Body = '
    <table border="1" cellpadding="0" cellspacing="0" style="border:1px solid rgb(120, 120, 120); color:#000000; font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:22px; margin:0 auto; width:600px">
      <tbody>
        <tr>
          <td style="background-color:rgba(180, 180, 180, 0.5); border-bottom:5px solid #0061af; padding:10px"><a href="http://www.theopeneyes.com" target="_blank"><img alt="The OpenEyes Technologies Logo" src="http://www.theopeneyes.com/images/logo-email.png" /></a></td>
        </tr>
        <tr>
          <td style="padding:10px">
            <h1 style="font-family:Calibri,sans-serif;">Thank you for your enquiry</h1>
            <h3 style="font-family:Calibri,sans-serif;">Your message has been sent successfully.</h3>
            <p></p>
            <p style="font-family:Calibri,sans-serif">Thank you for your enquiry. It has been forwarded to the relevant department and will be dealt with as soon as possible. If your inquiry is urgent, please use the contact number provided in <a href="http://www.theopeneyes.com/">website</a>.</p>
            <p></p>
            <p style="font-family:Calibri,sans-serif">Kindly,<br><strong>OpenEyes Technologies Inc.</strong></p>
          </td>
        </tr>
        <tr>
          <td style="background-color:#a6ce39; background:#a6ce39; color:#333; padding:10px; text-align:center">Copyright &copy; 2020 OpenEyes Technologies - All rights reserved.</td>
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
              title: "Thank you for your enquiry",
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


  <div class="pagepiling">
    <div data-anchor="welcomeoess" class="pp-scrollable text-white section section-1">
      <header class="navbar navbar-2 navbar-white boxed">
        <div class="navbar-bg"></div>
        <div class="content_form">
          <a class="inquire_now" id="inquire_now">Contact us</a>
        </div>
        <div class="content_form">
          <a href="resources" class="inquire_now resources" id="resources">Resources</a>
        </div>
        <!--<div class="content_form">
          <a class="inquire_now casestudy_btn" onclick="downloadAll(window.links)">Case Study</a>
        </div>
        <ul class="social_links header_links">
          <li><a href="https://twitter.com/OpenEyesTech" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a>
          </li>
          <li><a href="https://www.linkedin.com/company/13243146/" target="_blank"><i class="flaticon-linkedin"></i></a>
          </li>
        </ul>-->
        <a class="brand" href="index#WelcomeOpenEyes">
            <img class="brand-img" alt="" src="oess/oess/images/brand.png">
          </a>
      </header>
      <div class="scroll-wrap">
        <!-- <div class="section-bg" style="background-size: cover!important;background:url(oess/oess/images/bg/bg.jpg);"></div> -->
        <video class="video-fluid" controls autoplay playsinline loop muted poster="oess/oess/images/banner.jpg">
          <source src="oess/oess/images/explore.mp4" type="video/mp4">
          <source src="oess/oess/images/explore.webm" type="video/webm">
          <source src="oess/oess/images/explore.mov" type="video/mov">
        </video>
        <div class="video_content">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="video_desc">
                  <h5>welcome to</h5>
                  <h2 class="title-uppercase text-white">OpenEyes Technologies Inc.</h2>
                  <p>This could be the beginning of a beautiful relationship.</p> <a href="history"
                    class="banner_btn">Learn More</a>
                  <div class="clearfix"></div> <a href="#AboutOpenEyes" class="next-section"><i
                      class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-anchor="AboutOpenEyes" class="pp-scrollable section section-2"
      style="background-image: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.7)), url(oess/oess/images/bg/aboutbg.jpg);background-attachment: scroll;background-size:cover;">
      <div class="scroll-wrap">
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title text-white hidden-xs hidden-sm"><span>who we are</span>
              </div>
              <div class="boxed">
                <div class="container">
                  <div class="intro">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="title-uppercase text-white visible-xs visible-sm">Who we are</h2>
                      </div>
                      <div class="col-md-5 col-lg-5">
                        <div class="section_aboutus">
                          <h2 class="title-uppercase">Make every detail<br> <span
                              class="text-primary">perfect &amp; limit</span> the number of
                            details to perfect.</h2>
                        </div>
                      </div>
                      <div class="col-md-7 col-lg-7">
                        <div class="section_aboutus">
                          <p>At OpenEyes, we pride ourselves on offering our customers responsive,
                            comptent and excellent services.</p>
                          <p>Our customers are the most important part of our business, and we
                            work tirelessly to ensure your complete satisfaction, now and even
                            ever after.</p>
                          <p>Our staffs of highly qualified professionals, with our new internal
                            knowledge base system, ensure that deliveries of products are
                            achieved within the time limits, without inconvenience or damage.
                          </p> <a href="history" class="view_more">Learn More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-anchor="ourwork" class="pp-scrollable text-white section section-3 ourwork_section">
      <div class="scroll-wrap">
        <div class="bg-changer">
          <div class="section-bg active"
            style="background-size: cover!important;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(oess/oess/images/bg/afpbg.jpg) no-repeat;">
          </div>
          <div class="section-bg"
            style="background-size: cover!important;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(oess/oess/images/bg/atdbg.jpg) no-repeat;">
          </div>
          <div class="section-bg"
            style="background-size: cover!important;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(oess/oess/images/bg/lfbbg.jpg) no-repeat;">
          </div>
          <div class="section-bg"
            style="background-size: cover!important;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(oess/oess/images/bg/allibg.jpg) no-repeat;">
          </div>
          <div class="section-bg"
            style="background-size: cover!important;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(oess/oess/images/bg/tedxbg.jpg) no-repeat;">
          </div>
          <!--<div class="section-bg" style="background-size: cover!important;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(oess/oess/images/bg/aerebg.jpg) no-repeat;"></div>-->
        </div>
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title hidden-xs hidden-sm"><span>What we have done</span>
              </div>
              <div class="boxed">
                <div class="container">
                  <div class="intro">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="title-uppercase text-white visible-xs visible-sm">What we have
                          done</h2>
                        <div class="row-project-box row">
                          <div class="afp col-project-box col-sm-6 col-md-4 col-lg-4 active">
                            <a href="afp" class="project-box">
                              <div class="project-box-inner">
                                <h5>Corporate Training Skills Assessment</h5>
                                <div class="project-category">Assessment Tool</div>
                                <p>AFP established and administers the Certified Treasury
                                  Professional and Certified Corporates.</p>
                                <div class="read_more_link">Read More</div>
                              </div>
                            </a>
                          </div>
                          <div class="atd col-project-box col-sm-6 col-md-4 col-lg-4">
                            <a href="atd" class="project-box">
                              <div class="project-box-inner">
                                <h5>Assessment Tool</h5>
                                <div class="project-category">Scoring Tool for Assessing
                                  Team</div>
                                <p>ATD has several awards programs and recognizes
                                  organizations and individuals who are leading the talent
                                  development profession.</p>
                                <div class="read_more_link">Read More</div>
                              </div>
                            </a>
                          </div>
                          <div class="lfb col-project-box col-sm-6 col-md-4 col-lg-4">
                            <a href="learnfeedback" class="project-box">
                              <div class="project-box-inner">
                                <h5>Learn Feedback</h5>
                                <div class="project-category">Straehle Feedback Inventory
                                </div>
                                <p>Learnfeedback is a program built to assess, train,
                                  monitor, and coach individuals in your organization.</p>
                                <div class="read_more_link">Read More</div>
                              </div>
                            </a>
                          </div>
                          <div class="alli col-project-box col-sm-6 col-md-4 col-lg-4">
                            <a href="allinstitute" class="project-box">
                              <div class="project-box-inner">
                                <h5>All Institute</h5>
                                <div class="project-category">Coaching Services</div>
                                <p>ALL-Institute develops a curriculum and learning
                                  experience that is applied, real-world, problem-based,
                                  and represents the needs of the employers.</p>
                                <div class="read_more_link">Read More</div>
                              </div>
                            </a>
                          </div>
                          <div class="ted col-project-box col-sm-6 col-md-4 col-lg-4"
                            id="last_block">
                            <a href="tedxtysons" class="project-box">
                              <div class="project-box-inner">
                                <h5>TEDxTysons</h5>
                                <div class="project-category">Coaching Services</div>
                                <p>TEDx is a program of local,self-organized events that
                                  bring people together to share a TED-like experience.
                                </p>
                                <div class="read_more_link">Read More</div>
                              </div>
                            </a>
                          </div>
                          <!-- <div class="aere col-project-box col-sm-6 col-md-4 col-lg-4">
                            <a href="http://theopeneyes.com/aere" target="_blank" class="project-box">
                              <div class="project-box-inner">
                                <h5>Assessment, Education &amp; Research Experts</h5>
                                <div class="project-category">Event</div>
                                <p>AERE provides assessment, education, and research consulting services to organizations.</p>
                              </div>
                            </a>
                          </div> -->
                          <div class="view_more_box col-sm-6 col-md-4 col-lg-4">
                            <a href="work" class="view_all_works project-box">
                              <h5>For Complete Portfolio</h5>
                              <div class="project-category">Click here</div>
                              <div class="banner_btn"><i class="fa fa-plus"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- <div class="row">
                          <div class="col-md-12 text-center view_all_btn">
                            <a href="history" class="banner_btn">View All</a>												
                          </div>
                        </div> -->
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-anchor="ourservices" class="pp-scrollable text-white section section-6">
      <div class="scroll-wrap">
        <div class="section-bg"
          style="background-image: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)), url(oess/oess/images/bg/servicesbg.png);background-attachment: fixed;">
        </div>
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title hidden-xs hidden-sm"><span>WHAT WE DO</span>
              </div>
              <div class="boxed">
                <div class="container">
                  <div class="intro">
                    <div class="row">
                      <div class="">
                        <h2 class="title-uppercase visible-xs visible-sm text-white">WHAT WE DO</h2>
                      </div>
                      <div class="col-md-4">
                        <div class="col-resume">
                          <h6 class="resume-title">
                            CUSTOM SOFTWARE DEVELOPMENT
                          </h6>
                          <div class="resume-content">
                            <div class="resume-inner">
                              <div class="resume-row">
                                <p class="resume-study">We render web development services
                                  that combine technology with business concepts to help
                                  make your website user friendly. Our expertise in PHP,
                                  MySQL, JavaScript, AJAX, CodeIgnitor, Wordpress, MODX
                                  and Joomla.</p>
                                <ul class="resume-type">
                                  <li title="Angular" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/angular.png">
                                  </li>
                                  <li title="Node JS" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/node.png">
                                  </li>
                                  <li title="Codeigniter" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/codeigniter.png">
                                  </li>
                                  <li title="Laravel" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/laravel.png">
                                  </li>
                                  <li title="MySQL" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/mysql.png">
                                  </li>
                                  <li title="MS SQL Server" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/sqlserver.png">
                                  </li>
                                  <li title="Wordpress" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/wp.png">
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-resume">
                          <h6 class="resume-title">
                            MOBILE APP DEVELOPMENT
                          </h6>
                          <div class="resume-content">
                            <div class="resume-inner">
                              <div class="resume-row">
                                <p class="resume-study">With the advent of mobile
                                  technology, apps development industry has seen dramatic
                                  changes. We have trained app developers who have hands
                                  on experience in developing mobile apps for all kinds of
                                  platform, including Android and iOS.</p>
                                <ul class="resume-type">
                                  <li title="iOS" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/ios.png">
                                  </li>
                                  <li title="Android" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/android.png">
                                  </li>
                                  <li title="Phonegap" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/phonegap.png">
                                  </li>
                                  <li title="Titanium" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/titanium.png">
                                  </li>
                                  <li title="Xamarin" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/xamarin.png">
                                  </li>
                                  <li title="Rackspace" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/rackspace.png">
                                  </li>
                                  <li title="Digital Ocean" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/do.png">
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-resume">
                          <h6 class="resume-title">
                            UI/UX DESIGN STRATEGIES
                          </h6>
                          <div class="resume-content">
                            <div class="resume-inner">
                              <div class="resume-row">
                                <p class="resume-study">Website is often the first
                                  impression customers see of your company. With the help
                                  of modern design tools our web designers create
                                  appealing, exclusive designs that let you stand out from
                                  the crowd.</p>
                                <ul class="resume-type">
                                  <li title="HTML" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/html.png">
                                  </li>
                                  <li title="Bootstrap" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/bootstrap.png">
                                  </li>
                                  <li title="CSS" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/css.png">
                                  </li>
                                  <li title="JS" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/js.png">
                                  </li>
                                  <li title="Dreamweaver" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/dw.png">
                                  </li>
                                  <li title="inVision" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/in.png">
                                  </li>
                                  <li title="Photoshop" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/ps.png">
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-resume">
                          <h6 class="resume-title">
                            QUALITY ANALYSIS
                          </h6>
                          <div class="resume-content">
                            <div class="resume-inner">
                              <div class="resume-row">
                                <p class="resume-study">Unrivalled quality is the motto of
                                  our company and IT services provided by us are in-line
                                  with the industry standards. With the help of manual
                                  testing and automatic testing, our quality analysts
                                  check the websites to ensure proper functionality.</p>
                                <ul class="resume-type">
                                  <li title="Jira" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/jira.png">
                                  </li>
                                  <li title="HP UFT" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/hp.png">
                                  </li>
                                  <li title="Selenium" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/selenium.png">
                                  </li>
                                  <li title="Slack" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/slack.png">
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-resume">
                          <h6 class="resume-title">
                            CLOUD COMPUTING
                          </h6>
                          <div class="resume-content">
                            <div class="resume-inner">
                              <div class="resume-row">
                                <p class="resume-study">Cloud computing is shared pools of
                                  configurable computer system resources and higher-level
                                  services that can be rapidly provisioned with minimal
                                  management effort, often over the Internet.</p>
                                <ul class="resume-type">
                                  <li title="Amazon Web Service" data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/aws.png">
                                  </li>
                                  <li title="MS Azure " data-toggle="tooltip"
                                    data-placement="bottom">
                                    <img alt="" class="img-responsive"
                                      src="oess/oess/images/services/azure.png">
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="Services_grid">
                          <a href="service" class="view_all_services">
                            <h5>For Our More Services</h5>
                            <div class="service-category">Click here</div>
                            <div class="banner_btn"><i class="fa fa-plus"></i>
                            </div>
                          </a>
                        </div>
                      </div>
                      <!--<div class="col-md-4">
                        <div class="col-resume">
                          <h6 class="resume-title">
                            DATA ANALYTICS
                          </h6>
                        
                          <div class="resume-content">
                            <div class="resume-inner">
                              <div class="resume-row">
                                <p class="resume-study">Data analysis is a process of inspecting, cleansing, transforming, and modeling data with the goal of discovering useful information, informing conclusions, and supporting decision-making.</p>
                                <ul class="resume-type">
                                  <li title="Power PI" data-toggle="tooltip" data-placement="bottom"><img alt="" class="img-responsive" src="oess/oess/images/services/pi.png">
                                  </li>
                                  <li title="Tableau" data-toggle="tooltip" data-placement="bottom"><img alt="" class="img-responsive" src="oess/oess/images/services/tableau.png">
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>-->
                      <!-- <div class="col-md-12 text-center"><a href="Services" class="view_more">View
                          More</a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-anchor="ourclients" class="pp-scrollable section section-4">
      <div class="scroll-wrap">
        <div class="section-bg"
          style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(oess/oess/images/bg/ourclients.jpg);background-attachment: fixed;">
        </div>
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title text-white hidden-xs hidden-sm"><span>Whom we serve</span>
              </div>
              <div class="boxed">
                <div class="container">
                  <div class="intro overflow-hidden">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="title-uppercase visible-xs visible-sm text-white">Whom we serve
                        </h2>
                        <div class="row-partners">
                          <div class="col-partner col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="partner-inner">
                              <a href="https://www.afponline.org/" target="_blank">
                                <img alt="" class="img-responsive"
                                  src="oess/oess/images/partners/afp.png">
                              </a>
                            </div>
                          </div>
                          <div class="col-partner col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="partner-inner">
                              <a href="https://www.tedxtysons.com/" target="_blank">
                                <img alt="" class="img-responsive"
                                  src="oess/oess/images/partners/ted.png">
                              </a>
                            </div>
                          </div>
                          <div class="col-partner col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="partner-inner">
                              <a href="http://td.org" target="_blank">
                                <img alt="" class="img-responsive"
                                  src="oess/oess/images/partners/atd.png">
                              </a>
                            </div>
                          </div>
                          <div class="col-partner col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="partner-inner">
                              <a href="https://www.hrci.org/" target="_blank">
                                <img alt="" class="img-responsive"
                                  src="oess/oess/images/partners/hrci.png">
                              </a>
                            </div>
                          </div>
                          <div class="col-partner col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="partner-inner">
                              <a href="http://www.aerexperts.com" target="_blank">
                                <img alt="" class="img-responsive"
                                  src="oess/oess/images/partners/aere.png">
                              </a>
                            </div>
                          </div>
                          <div
                            class="col-partner view_more_clients col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="partner-inner view_all_clients">
                              <a href="client">
                                <h5>For Complete list of Clients</h5>
                                <div class="project-category">Click here</div>
                                <div class="banner_btn"><i class="fa fa-plus"></i>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- <div class="col-partner">
                            <div class="partner-inner"><a href="https://www.tedxtysons.com" target="_blank"><img alt="" class="img-responsive" src="oess/oess/images/partners/ted.png"></a>
                            </div>
                          </div> -->
                        </div>
                        <!--<div class="text-center"> <a href="client" class="read_more">View More</a>
                        </div>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-anchor="contactus" class="pp-scrollable section section-6" id="contact">
      <div class="scroll-wrap">
        <div class="section-bg"
          style="background-size: cover!important;background:url(oess/oess/images/bg/banner.jpg);"></div>
        <div class="scrollable-content position_contact">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title text-dark hidden-xs hidden-sm"><span>Where we are</span>
              </div>
              <div class="boxed">
                <div class="container">
                  <div class="intro overflow-hidden">
                    <div class="row">
                      <div class="col-md-12 visible-xs visible-sm">
                        <h2 class="title-uppercase">Where we are</h2>
                      </div>
                      <!-- Map Section -->
                      <div class="footer map_content">
                        <div class="map footer_top">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="usa_add2">
                              <div class="country_logo">
                                <img alt=""
                                  src="oess/oess/images/united-states-of-america.png">
                              </div><strong>USA</strong>
                              <p>1629 K St NW #300
                                <br>Washington DC 20006</p>
                              <p>Telephone : <a href="tel:+1 202.349.5858">+1
                                  202.349.5858</a><br>Email : <a
                                  href="mailto:dc@theopeneyes.com">dc@theopeneyes.com</a>
                              </p>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="usa_add1">
                              <div class="country_logo">
                                <img alt=""
                                  src="oess/oess/images/united-states-of-america.png">
                              </div><strong>USA</strong>
                              <p>46907 Wesleyan Ct
                                <br>Sterling VA 20164</p>
                              <p>Telephone : <a href="tel:+1 703.957.9525">+1
                                  703.957.9525</a><br>Email : <a
                                  href="mailto:virginia@theopeneyes.com">virginia@theopeneyes.com</a>
                              </p>
                            </div>
                          </div>
                          <div
                            class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-3">
                            <div class="india_add">
                              <div class="country_logo">
                                <img alt="" src="oess/oess/images/india.png">
                              </div><strong>INDIA</strong>
                              <p>#405, 4th Floor, Iscon Atria 1
                                <br>Gotri Road, Vadodara 390021</p>
                              <p>Telephone : <a href="tel:+91 265.298.EYES">+91
                                  265.298.EYES</a><br>Email : <a
                                  href="mailto:info@theopeneyes.com">info@theopeneyes.com</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="footer_sponsor">
                          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img class="img-responsive" alt="" src="oess/oess/images/microsoft-iso-aws.png">
                          </div> -->
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="title_sponser">
                              <p>Certification</p>
                              <img class="img-responsive iso" alt=""
                                src="oess/oess/images/iso-2015.png">
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="title_sponser">
                              <p>Partners</p>
                              <img class="img-responsive microsoft" alt=""
                                src="oess/oess/images/microsoft.png">
                              <img class="img-responsive aws" alt=""
                                src="oess/oess/images/aws.png">
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="title_sponser">
                              <p>Membership</p>
                              <a href="https://www.nvtc.org/membership/public.php"
                                target="_blank"><img class="img-responsive nvtc" alt=""
                                  src="oess/oess/images/nvtc.png"></a>
                              <a href="https://dc.tie.org/"
                                target="_blank"><img class="img-responsive tedc" alt=""
                                  src="oess/oess/images/tedc.png"></a>
                                  <a href="https://www.testpublishers.org/" target="_blank"><img class="img-responsive atp" alt="" src="oess/oess/images/atp.jpg"></a>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="clearfix"></div>
                      <!-- End Map Section -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="go_top"><i class="flaticon-up-arrow"></i></div>
<div class="footer_bottom footer_fixed boxed">
	<div class="col-md-9 col-sm-9 text-left">Copyrights &copy; <span id="footer_year"></span> OpenEyes Technologies Inc.</div>
	<div class="col-md-3 col-sm-3 text-right">
		<ul class="social_links">
    <li><a href="privacy-policy" class="policy_li" target="_blank">Privacy Policy</a></li>
    <li><a href="Cookie" class="policy_li" target="_blank">Cookie Policy</a></li>
			<li><a href="https://twitter.com/OpenEyesTech" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
			<li><a href="https://www.linkedin.com/company/13243146/" target="_blank"><i class="flaticon-linkedin"></i></a></li>
		</ul>
	</div>
</div>
<div class="clearfix"></div>
<!-- Modal -->
<style>
  .policy_li{margin-right:30px;}
#myModal .view_more{margin:0;
    text-decoration: none;
    float: right;
    color: #fff!important;
    text-transform: uppercase;
    font-size: 16px;
    padding: 10px 20px!important;
    font-weight: 400;
    background: #0061AF;
    line-height: 18px; border:0;
}
.footer_bottom.footer_fixed {
    z-index: 999;
}
.modal-backdrop.in {
    filter: alpha(opacity=70);
    opacity: .7;
}
#myModal .modal-header{
    color: #fff!important;
    text-transform: uppercase;
    font-size: 18px;
    padding: 20px 20px!important;
    font-weight: bold;
    background: #0061AF;
    line-height: 18px;
    border: 0;
    border-radius: 5px 5px 0 0;
    margin: -1px;
}
#myModal .modal-dialog{margin:15% auto;}
#myModal .modal-content{background:url('oess/oess/images/map.jpg') center center no-repeat; background-size:cover;}
#myModal .modal-body{padding:20px;}
#myModal .modal-content p{font-size:20px; line-height:35px; margin:0 0 10px 0;}
#myModal .modal-content i{font-style:italic;}
</style>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	  <div class="modal-header">
        About COVID-19
      </div>
      <div class="modal-body">
         <p><i>Virtual. Convenient. Efficient. Dependable.</i></p>
		<p>These are critical success factors <i>now</i> and <i>for the future</i>. 
		OpenEyes is fully operational and vigorously ensuring that our clients’ missions are accomplished.</p> <p>We can be there for you too.</p>
		<p>Schedule a conversation to discuss how we can help you.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="view_more" id="okpopup">OK</button>
      </div>
    </div>
  </div>
</div>
<div class="modal-backdrop fade" id="backdroppopup"></div>
<div id="cookie_directive_container" style="display: none">
                <div class="container">
                <div class="row" id="cookie_accept">
                <div class="col-md-12">
                    <a href="#" class="view_more pull-right">Close</a>
                    <p>
                      By using our website you are consenting to our use of cookies in accordance with our <a href="Cookie">cookie policy</a>.
                    </p>
                </div>
              </div>
        </div>
</div>
<script src="oess/oess/js/jquery.min.js"></script>
<script src="oess/oess/js/bootstrap.min.js"></script>
<script>
 $( document ).ready(function() {
	 $('#myModal').addClass('in');
	$('#backdroppopup').addClass('modal-backdrop fade in');
	$("#myModal").css("display", "block");
	 $( "#okpopup" ).click( function () {
		$('#myModal').removeClass('in');
		$('#backdroppopup').removeClass('modal-backdrop fade in');
		$("#myModal").css("display", "none");
	} )
});
</script>

<script src="oess/oess/js/sweetalert2.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>

<script src="oess/oess/js/smoothscroll.js"></script>
<script src="oess/oess/js/jquery.validate.min.js"></script>
<!-- <script src="oess/oess/js/jquery-1.12.0.min.js"></script> -->
<script src="oess/oess/js/owl.carousel.js"></script>
<script src="oess/oess/js/jquery.pagepiling.js"></script>
<script src="oess/oess/js/scripts.js"></script>
<script src="oess/oess/js/index.js"></script>

<script src="oess/oess/js/jquery.roadmap.js"></script>

<script src="oess/oess/js/cookie-consent.js"></script>
<script src="oess/oess/js/accordion.js"></script>

<!-- start script for process slider -->
<script src="oess/oess/js/modernizr.js"></script>
<script src="oess/oess/js/jquery.js"></script>
<script src="oess/oess/js/tinyscrollbar.js"></script> 
<script src="oess/oess/js/metro-slider.js"></script> 
<!-- end script for process slider -->


<!--<script src="oess/oess/js/jquery-3.3.1.slim.min.js"></script>-->

<script>
$(document).ready(function() {

if(window.location.href.indexOf("Process") > -1) {
		getAccordion("#tabs",993);
	 }
	 });
</script>
<script>
	$( "#inquiry_submit" ).click( function () {
		var recaptcha = document.forms[ "inquireform" ][ "g-recaptcha-response" ];
		recaptcha.required = true;
		recaptcha.oninvalid = function ( e ) {
			$( ".inquire_error" ).css( "display", "block" );
		};
	} )
	var vids = $( "video" );
	$.each( vids, function () {
		this.controls = false;
	} );
	
	
	
</script>

</body>
</html>
