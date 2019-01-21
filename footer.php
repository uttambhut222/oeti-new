
<div class="go_top"><i class="flaticon-up-arrow"></i></div>

<div class="footer_bottom footer_fixed boxed">
	<div class="col-md-9 col-sm-9 text-left">Copyrights &copy; 2019 OpenEyes Technologies Inc.</div>
	<div class="col-md-3 col-sm-3 text-right">
		<ul class="social_links">
			<li><a href="https://twitter.com/OpenEyesTech" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
			<li><a href="https://www.linkedin.com/company/13243146/" target="_blank"><i class="flaticon-linkedin"></i></a></li>
		</ul>
	</div>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/sweetalert2.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>

<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<!-- <script src="assets/js/jquery-1.12.0.min.js"></script> -->
<script src="assets/js/jquery.pagepiling.js"></script>
<script src="assets/js/jquery.roadmap.js"></script>

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
	
	//timeline js
	var events = [{
                    date: 'Aug 2018',
                    content: 'New Office Launch <small>We keep moving forward, opening new doors, and doing new things, because we are curious and curiosity keeps leading us down new paths.</small>'
                },
                {
                    date: 'Jan 2017',
                    content: 'Staffing & Recruting Team <small>Launched staffing and recruitment services. We are highly professional and has expertise in finding the most qualified candidates available.</small>'
                },
                {
                    date: 'Dec 2016',
                    content: 'OpenEyes Software Solution <small>Launch of child company</small>'
                },
                {
                    date: 'Oct 2013',
                    content: 'OpenEyes Technologies, Inc <small>With success of OpenEyes in India and in continuation of growth with the changing world, the company renamed one more time</small><strong>- OpenEyes Technologies, Inc.</strong>'
                },
                {
                    date: 'Apr 2009',
                    content: 'OpenEyes Security Services <small>With the business ingenuity, BIPA has started a new venture in India in Security sector</small><strong>- OpenEyes Security Services.</strong>'
                },
                {
                    date: 'Oct 2005',
                    content: 'BIPA Systems, Inc  <small>Company got a new face and new name with the same staff and same result. Now its call</small><strong>- BIPA Systems, Inc.</strong>'
                },
                {
                    date: 'Jan 2000',
                    content: 'Company Startup  <small>New York - A startup has emerged by our mentor and current president with one of his close friends. They called it</small><strong>- Tzar TechnoKraft, Inc.</strong>'
                }
            ];

            $('#my-timeline').roadmap(events, {
                eventsPerSlide: 5,
                slide: 1,
                prevArrow: '<i class="fa fa-chevron-left"></i>',
                nextArrow: '<i class="fa fa-chevron-right"></i>'
            });
	
</script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>