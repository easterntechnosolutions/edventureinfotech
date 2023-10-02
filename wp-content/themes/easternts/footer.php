<!--  Footer  -->

<!-- We can help -->

<section class="weCanhalp">
	<img class="weImg weLf" src="../../wp-content/uploads/2021/11/call-ets1.gif" alt="ets1">
	<img class="weImg weRf" src="../../wp-content/uploads/2021/11/call-ets2.webp" alt="ets2">
	<div class="container ">
		<div class="row text-center">
			<div class="weCan">
				<h3>We can help you build what you have been looking for.</h3>
			</div>
			<div class="comBtn2 text-center">
				<a href="tel:+91 704 682 7566" class="comBtn">Call Us</a>
			</div>
		</div>
	</div>
</section>

<!-- Subscribe newsletter -->

<!-- <section class="subNew">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 SubPadd">
				<h3>Subscribe to our <span class="colororeang">newsletter</span></h3>
			</div>
			<div class="col-md-7 SubPadd">
				<div class="row">
					<div class=" col-md-7 col-sm-7 SubPadd">
						<input type="gmail" class="emailInput" placeholder="Email">
					</div>

					<div class="comBtn2 col-md-5 col-sm-5  SubPadd text-center">
						<a href="/" class="subbtn">Subscribe </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="subNew"> 
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 SubPadd">
				<h3>Subscribe to our <span class="colororeang">newsletter</span></h3>
			</div>
			<div class="col-md-7 SubPadd">
				<div class="row">
					<?php echo do_shortcode('[contact-form-7 id="7856" title="Home subscriber form"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>


<!--  Menu  -->

<section class=" footerBgcolor">
	<div class="container">
		<div class="row">
			<div class="footerEts">
                    <?php 
                         wp_nav_menu(
                              array(
                                   'theme_location' => 'footer-menu',
                                   'menu_class'     => '',
                                   'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                   'link_before' => '<span>',
                                   'link_after' => '</span>',
                              )
                         );
                    ?>
				<!-- <ul>
					<li><a href="/"> About US </a> </li>
					<li><a href="/"> Blog </a> </li>
					<li><a href="/"> Career </a> </li>
					<li><a href="/"> Our Team </a> </li>
					<li><a href="/"> News </a> </li>
					<li><a href="/"> Strategic Partnerships </a> </li>
					<li><a href="/"> Testimonials </a> </li>
					<li><a href="/"> Terms and Conditions </a> </li>
				</ul> -->
			</div>
		</div>

	</div>
</section>

<section class="fooTow">
	<div class="container">
		<div class="row">
			<div class="col-md-6  col-sm-6  copiyright">
				<div><img src="../../wp-content/uploads/2021/11/easternicon.webp" alt="eastern"></div>
				<div>
					<p>© <?php echo date('Y'); ?> Edventure Infotech. All Rights Reserved.</p>
				</div>
			</div>
			<hr class="footerHr">
			<div class="col-md-6 col-sm-6  etscenter">
				<ul class="etsSocial">
					<li><a href="https://www.facebook.com/EasternTechnoSolutions" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://twitter.com/EasternTechnoS" target="_blank"><i class="fab fa-twitter"></i> </a></li>
					<li><a href="https://www.linkedin.com/company/eastern-techno-solutions" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
					<li><a href="https://in.pinterest.com/easternts" target="_blank"><i class="fab fa-pinterest-p"></i> </a></li>
					<li><a href="https://www.instagram.com/easterntechnosolutions" target="_blank"> <i class="fab fa-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/EasternTechnoSolutionsSurat" target="_blank"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<div class="text-center apply-now-footer d-none">
		<a href="javascript:;" class="career-btn">APPLY NOW</a>
</div>
	
<?php wp_footer(); ?>

<script>

$(window).on("load scroll", function () {
	"use strict";
	$(".wow").css("animation-play-state", "paused");
	$(".wow").each(function () {
		if (!($(this).data("wow-duration"))) {
			$(this).data("wow-duration", "1s");
		}
		if ($(this).data("wow-offset") + $(this).offset().top <= $(window).scrollTop() + $(window).height() || (!($(this).data("wow-offset")) && $(this).offset().top <= $(window).scrollTop() + $(window).height())) {
			$(this).css("animation-play-state", "running ");
			$(this).css({
				"animationDuration": $(this).data("wow-duration"),
				"animationDelay": $(this).data("wow-delay"),
				"animationIterationCount": $(this).data("wow-iteration")
			});
		}
	});
});
</script>
</body>

</html>