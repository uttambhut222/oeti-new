<div class="go_top"><i class="flaticon-up-arrow"></i></div>

<footer>
<div class="partnership_footer">

<div class="col-sm-2 col-md-2 col-md-offset-2">
							  <div class="title_sponser text-center">
							  <p><b>Certification</b></p>
									<img class="img-responsive iso" alt="" src="images/iso-2015.png">
								</div>
							</div>
							<div class="col-sm-3 col-md-3">
							<div class="title_sponser text-center">
							 <p><b>Partners</b></p>
								<img class="img-responsive microsoft" alt="" src="images/microsoft.png">
								<img class="img-responsive aws" alt="" src="images/aws-cer.png">
							</div>
							</div>
							<div class="col-sm-3 col-md-3">
							<div class="title_sponser text-center">
							 <p><b>Membership</b></p>
								<a href="https://www.nvtc.org/membership/public.php" target="_blank"><img class="img-responsive nvtc" alt="" src="images/nvtc.png"></a>
								<a href="https://dc.tie.org/" target="_blank"><img class="img-responsive tedc" alt="" src="images/tedc.png"></a>
								<a href="https://www.testpublishers.org/" target="_blank"><img class="img-responsive tedc" alt="" src="images/atp.jpg"></a>
								
							</div>
						  </div>
<div class="clearfix"></div>
</div>

	<div class="container"> 

		<div class="row">

			<div class="col-md-6 col-sm-6 text-left">Copyrights &copy; 2020 OpenEyes Technologies Inc.</div>

			<div class="col-md-6 col-sm-6 text-right">

				<ul class="social_links">

				 <li><a href="privacy-policy" class="policy_li" target="_blank">Privacy Policy</a></li>
				 <li><a href="Cookie" class="policy_li" target="_blank">Cookie Policy</a></li>
					<li><a href="https://twitter.com/OpenEyesTech" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a></li>

					<li><a href="https://www.linkedin.com/company/13243146/" target="_blank"><i class="flaticon-linkedin"></i></a></li>

				</ul>

			</div>

		</div>

	</div>

</footer>

<div class="clearfix"></div>

<!-- End Footer --> 

<!--<style>
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
.footer_bottom.footer_fixed {
    z-index: 999;
}
.modal-backdrop.in {
    filter: alpha(opacity=70);
    opacity: .7;
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
        <button type="button" class="view_more" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>-->

<script src="js/jquery-1.11.3.min.js"></script> 

<script src="js/bootstrap.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js"></script> 

<script src="js/jquery.bxslider.js"></script> 

<script src="js/sweetalert2.min.js"></script> 
<script>
// Form Recapcha
$("#career_submit").click(function(){
	 var recaptcha = document.forms["careerform"]["g-recaptcha-response"];
	recaptcha.required = true;
	recaptcha.oninvalid = function(e) {
		$(".career_error").css("display", "block"); 
   }
})

$("#inquiry_submit").click(function(){
	 var recaptcha = document.forms["inquireform"]["g-recaptcha-response"];
	recaptcha.required = true;
	recaptcha.oninvalid = function(e) {
		$(".inquire_error").css("display", "block"); 
   };
})

// End Form Recapcha
</script> 

<!--<script>
 $( document ).ready(function() {
	 $('#myModal').modal('show');
	
});
</script>-->


<script src="js/owl.carousel.js"></script> 

<script src="js/mixitup.js"></script>

<script src="js/custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126634094-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126634094-1');
</script>


</body>

</html>