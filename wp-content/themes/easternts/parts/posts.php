<?php get_header(); ?>

<div class="floatleft primary content">
	<?php if (have_posts()) : ?>
		<div class="post-listing">
			<?php while (have_posts()) : the_post(); ?>
				<article class="post-item <?php if(is_single()): ?>single-post-item<?php endif; ?>">
					<?php if(!is_single()): ?>
			
						<div class="floatright post-r">
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<p class="date"><?php the_time(get_option('date_format')); ?></p>
							<?php the_excerpt(); ?>
							<?php get_template_part('parts/post-categories'); ?>
							<?php get_template_part('parts/post-tags'); ?>
						</div><!--post-r-->
			
						<div class="floatleft post-l">
							<?php
							if ( has_post_thumbnail() ): the_post_thumbnail( 'large-thumbnail'); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No Image" title="No Image" />
							<?php endif; ?>
						</div><!--post-l-->
			
					<?php else: ?>
				
						<h2><?php the_title(); ?></h2>
						<p class="date"><?php the_time(get_option('date_format')); ?></p>
						<?php the_content(); ?>
						<?php get_template_part('parts/post-categories'); ?>
						<?php get_template_part('parts/post-tags'); ?>
						<p><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Back to Blog</a></p>
				
					<?php endif; ?>
				</article><!--post-item-->
			<?php endwhile; ?>
			<?php get_template_part('parts/pagination'); ?>		
		</div><!--post-listing-->
	<?php else : ?>		
		<!-- no content found -->
	<?php endif; ?>
</div><!--primary-->

<div class="floatright secondary">
	<?php get_template_part('parts/blog-categories')?>
	<?php get_template_part('parts/year-month-archive'); ?>
</div>


<?php get_footer(); ?>