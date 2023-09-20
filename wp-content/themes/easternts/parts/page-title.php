<div class="page-title"><h1><?php 
	if (is_blog()): ?>
		<?php if (is_category()): ?>
			<?php single_cat_title(); ?>
			
		<?php elseif (is_tag()): ?>
			<?php single_tag_title(); ?>

		<?php elseif (is_day()): ?>
			<?php the_time('l, F j, Y'); ?>

		<?php elseif (is_month()): ?>
			<?php the_time('F Y'); ?>
	
		<?php elseif (is_year()): ?>
			<?php the_time('Y'); ?>
	
		<?php elseif (is_single()): ?>
			<?php 
			echo get_the_title( get_option( 'page_for_posts' ) );
			//the_title(); ?>

		<?php else: ?>
			<?php 
			echo get_the_title( get_option( 'page_for_posts' ) );
			?>
		<?php endif; ?>

	<?php elseif (is_post_type_archive()): ?>
		<?php post_type_archive_title(); ?>

	<?php elseif (is_tax()):
		global $wp_query;
		$term = $wp_query->get_queried_object();
		$title = $term->name; 
		echo $title; ?>

	<?php elseif (is_404()): ?>
		Page not found

	<?php elseif (is_search()): ?>
		Search results

	<?php elseif (is_author()): 
		global $post;
    	$author_id = $post->post_author; ?>
		Posts by <?php $field='display_name'; echo the_author_meta( $field, $author_id ); ?>

	<?php elseif (is_singular('publication')): ?>
		<?php $obj = get_post_type_object( 'publication' );
		echo $obj->labels->name; ?>
	<?php else: ?>
		<?php the_title(); ?>
<?php endif; ?>
</h1>
</div><!--page-title-->