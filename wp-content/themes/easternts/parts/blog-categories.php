<div class="sub-menu">
	<h2>Categories</h2>
	<ul>
		<?php 
		$args = array(
		'title_li'           => ''
	);
		wp_list_categories( $args); ?> 
	</ul>
</div><!--sub-menu-->