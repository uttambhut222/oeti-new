

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