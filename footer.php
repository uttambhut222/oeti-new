<div class="go_top"><i class="flaticon-up-arrow"></i></div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 text-left">Copyrights &copy; 2018 OpenEyes Technologies Inc.</div>
			<div class="col-md-6 col-sm-6 text-right">
				<ul class="social_links">
					<li><a href="https://twitter.com/OpenEyesTech" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
					<li><a href="https://www.linkedin.com/company/13243146/" target="_blank"><i class="flaticon-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="clearfix"></div>
<!-- End Footer --> 

<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script><script src="https://www.google.com/recaptcha/api.js"></script> 
<script src="js/jquery.bxslider.js"></script> 
<script src="js/sweetalert2.min.js"></script> <script>// Form Recapcha$("#career_submit").click(function(){	 var recaptcha = document.forms["careerform"]["g-recaptcha-response"];	recaptcha.required = true;	recaptcha.oninvalid = function(e) {		$(".career_error").css("display", "block");    }})$("#inquiry_submit").click(function(){	 var recaptcha = document.forms["inquireform"]["g-recaptcha-response"];	recaptcha.required = true;	recaptcha.oninvalid = function(e) {		$(".inquire_error").css("display", "block");    };})$("#inquireform").submit(function() {  if ($("#MiddleName").val()){	   var href = window.location.href;	   window.location.assign(href);   };})// End Form Recapcha</script> 
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