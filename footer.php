<!-- Footer -->
		<div class="footer w3ls">
			<div class="footer-2 w3ls">
				<div class="container">
					<div class="footer-main">
						<div class="footer-top">
							<div class="col-md-4 ftr-grid fg2">
								<h3>Our Address</h3>
								<div class="ftr-address">
									<div class="local">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="ftr-text">
										<p>Panchikawaththa.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="ftr-address">
									<div class="local">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="ftr-text">
										<p>0112445275</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="ftr-address">
									<div class="local">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="ftr-text">
										<p><a href="mailto:adabey@ymail.com">adabey@ymail.com</a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
								<!-- <div class="col-md-4 ftr-grid">
									<div class="logo-fo">
										<h2><a href="index.html">Corporate</a></h2>
									</div>
								</div> -->
								<div class="col-md-4 w3l_header_left-2">
									<div class="w3ls-social-icons-2">
										<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
										<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
										<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
										<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
										<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="copyrights">
					<p>&copy; 2018 Corporate. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>	 -->
			</div>
			<!-- //Footer -->
			<!-- js-scripts -->					
			<!-- js -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
			<!-- //js -->	
			<!-- Baneer-js -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						pager:false,
						nav: true,
						speed: 1000,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			<!-- //Baneer-js --> 
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
			<!-- //js-scripts -->
			<!-- Owl-Carousel-JavaScript -->
			<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel ({
						items : 4,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
					});
				});
			</script>
			<!-- //Owl-Carousel-JavaScript -->  

		</body>
		</html>