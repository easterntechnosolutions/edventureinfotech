<?php get_header();
$args = array( 'post_type' => 'casestudy', 'posts_per_page' => -1 );
$the_query = new WP_Query( $args ); 
?>

<section class="case-studies-post">
    <div class="container">
        <div class="row">
            <div class="col-md-10 case-studies-h1">
                <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/12/forward-freight-logo.webp" alt="" title="">
                <h1> <?php the_title(); ?> </h1>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
</section>

<?php
    if (have_posts()) {
        $count = 1;
        while (have_posts()) : the_post();
            if( have_rows('content_blocks') ) {
                while( have_rows('content_blocks') ): the_row(); ?>
                    <section id="content_block_<?php echo $count; ?>" class="content_blocks_lists content_block_<?php echo $count; ?>">
                        <?php
                            echo $sub_content_block = get_sub_field('content_block');
                        ?>
                    </section><?php
                    $count++;
                endwhile;
            } else { ?>
                <div class="page_contents_section about-section">
                    <div class="auto-container"><?php
                        if( '' !== get_post()->post_content ) {
                            the_content();
                        } else {
                            echo "<h5 style='font-weight: bold'>No Contents Found.</h5>";
                        } ?>
                    </div>
                </div><?php
            }
        endwhile;
    } else {
        echo "<h3>No Contents Found.</h3>";
} ?>

<?php get_footer(); ?>