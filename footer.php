<div class="footer_bottom footer_fixed boxed">
	<div class="col-md-9 col-sm-9 text-left">Copyrights &copy; 2018 OpenEyes Technologies Inc.</div>
	<div class="col-md-3 col-sm-3 text-right">
		<ul class="social_links">
			<li><a href="https://twitter.com/OpenEyesTech" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
			<li><a href="https://www.linkedin.com/company/13243146/" target="_blank"><i class="flaticon-linkedin"></i></a></li>
		</ul>
	</div>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/sweetalert2.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>

<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.pagepiling.js"></script>

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
<script src="assets/js/scripts.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>