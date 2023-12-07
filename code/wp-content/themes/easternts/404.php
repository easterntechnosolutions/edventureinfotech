<?php get_header(); ?>
	
<!-- <section>
    <div class="firebaseApp">
        <div class="">
            <div class="row text-center"> -->
                <!-- <div class="">
                    <img src="https://www.easternts.com.au/wp-content/uploads/2019/05/App-Development.jpg">
                </div> -->
               <!-- <div class="serimg">
                    <div class="sercon ">
                        <div class="text-center container">
                            <h1>404 - Page Not Found</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<div class="sectionPadd">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="404wrapper text-center">
					<img src="/wp-content/uploads/2023/12/404.webp"  title="Nothing Found Here" alt="404 error" style="width: 415px;">
					<h1 class="error-title text-center">Oops! Nothing Was Found</h1>
					<h4 class="error-page-text text-center" style="margin-top: 20px;"><?php esc_html_e('Sorry, we couldn’t find the page you where looking for. We suggest that you return to homepage.', 'edventure'); ?></h4>                
					<div class="comBtn2 text-center view-more"  style="margin-top: 50px;">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="comBtn">Back TO HOMEPAGE </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>