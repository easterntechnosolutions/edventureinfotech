<?php get_header() ?>

<?php 
    $args = array( 
    'post_status' => 'publish',
    'post_type' => 'post', 
    'posts_per_page' => 3,
    'order'    => 'DESC',
    'orderby'  => 'date'
);
$the_query = new WP_Query( $args );  ?>

<section class="ets-post-page">
    <div class="container">
        <div class=" post-page">
            <div class="row">
                <div class="col-md-12 px-3">
                    <!-- Post Heading -->
                    <h1><?php the_title(); ?></h1>
                <!-- Post-meta -->
					
<!--                     <div class="post-meta mb-4">
                       <span class="mr-1 post-author">By <?php echo get_the_author(); ?></span> | <span class="mx-2 post-published"> <?php echo get_the_date( 'F j, Y' ); ?></span> | <span class="ml-2 post-category"> <a href=""><?php the_title(); ?></a></span>
                    </div> -->
					
					<div class="post-meta mb-4">
                        <span class="mx-2 post-published"> <?php echo get_the_date( 'F j, Y' ); ?></span> | <span class="ml-2 post-category"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                    </div>
					
                </div>
            </div>

            <div class="row d-inline-block">
                <div class="col-md-8">
                    <!-- Thumbnail image -->
                    <?php the_post_thumbnail(); ?>
                    <!-- <img src="https://www.easternts.com.au/wp-content/uploads/2022/06/1826227.webp" class="post-thumbline-iamge"> -->
                    <!-- Content  -->    
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
                </div>

                <!-- Right sidebar  -->

                <div class="col-md-4 post-right-sidebar position-sticky-sidebar">
                    <div class="latest-post">
                        <h3 class="mt-0">Latest Post</h3>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                        <div class="latest-post-div">
                            <div class="latest-post-iamge">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                            <div class="latest-post-ontent">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <span class="latest-post-published"><?php echo get_the_date( 'F j, Y' ); ?></span>
                            </div>
                        </div>
                        <?php endwhile; ?>   
                    </div>

                    <!-- Tag -->
					
<!--                     <div class="post-tag-list pt-4  pb-4">
                        <h3 class="mt-0">Tags</h3>
                        <div class="post-ets-tag">
                            <span><a href="#">Data Analytics </a></span>
                            <span><a href="#">Optimization weside </a></span>
                            <span><a href="#">SEO </a></span>
                            <span><a href="#">Optimization </a></span>
                            <span><a href="#">SEO </a></span>
                            <span><a href="#">Data Analytics </a></span>
                            <span><a href="#">Data Analytics </a></span>
                            <span><a href="#">Optimization </a></span>
                            <span><a href="#">SEO </a></span>
                            <span><a href="#">Optimization </a></span>
                            <span><a href="#">SEO </a></span>
                            <span><a href="#">Data Analytics </a></span>
                        </div>
                    </div> -->

                    <!-- Category -->
					
<!--                     <div class="post-category-list pt-4">
                        <h3 class="mt-0">Category</h3>
                        <div class="post-category-tag">
                            <span><a href="#">Data Analytics </a></span>
                            <span><a href="#">Optimization </a></span>
                            <span><a href="#">SEO </a></span>
                            <span><a href="#">Optimization </a></span>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-page-padd">
    <div class="container">
        <div class="row d-table-row">
            <div class="col-sm-12 post-page-related-post">
                <h2>Related Post</h2>
            </div>
        </div>
        <div class="row d-flow-root">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
            <div class="col-md-4 col-sm-6 bog-artical">
                <div class="bog-details">
                    <?php the_post_thumbnail(); ?>
                    <div class="blog-containt">
                        <span class="blog-category"><?php the_title(); ?></span>
                        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="blog-short-description"><?php echo wp_trim_words( get_the_content(), 28); ?></p>
                        <div class="blog-hover-btn">
                            <a href="javascript:;">
                                <svg class="icon-arrow before">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                                <span class="label">Read More</span>
                                <svg class="icon-arrow after">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </a>
                            <svg style="display: none;">
                                <defs>
                                    <symbol id="arrow" viewBox="0 0 35 15">
                                        <title>Arrow</title>
                                        <path d="M27.172 5L25 2.828 27.828 0 34.9 7.071l-7.07 7.071L25 11.314 27.314 9H0V5h27.172z " />
                                    </symbol>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>  
        </div>
    </div>
</section>

<!-- Build your app to reach far and wide! -->

<?php get_template_part("parts/sort-code-build-your-app"); ?>

<!-- Our Services -->
<?php get_footer() ?>