<?php get_header(); ?>
	
<section>
      <div class="firebaseApp">
          <div class="">
              <div class="row text-center">
                  <!-- <div class="">
                      <img src="https://www.easternts.com.au/wp-content/uploads/2019/05/App-Development.jpg">
                  </div> -->
                  <div class="serimg">
                      <div class="sercon ">
                          <div class="text-start container">
                              <h1>404 - Page not found</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <div class="container">
  <div class="main error-page">
	<div class="section" id="error-page">
		<h2 class="error-title"> Page you are looking is not found </h2>
		<h4 class="error-page-text"><?php esc_html_e('The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site homepage and see if you can find what you are looking for.', 'easternts'); ?></h4>
		<div class="page error-text">
			
		</div>
		<div class="comBtn2 text-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="comBtn">Back TO HOME PAGE </a>
			</div>
	</div>
</div><!--main-->
</div>

<?php get_footer(); ?>