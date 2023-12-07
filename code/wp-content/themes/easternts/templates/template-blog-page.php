<?php
/*
    Template Name:  Blog Page
*/
?>

<?php get_header();
$args = array( 
    'post_status' => 'publish',
    'post_type' => 'post', 
    'posts_per_page' => -1,
    'order'    => 'DESC',
	'orderby'  => 'date'
 );
$the_query = new WP_Query( $args );  ?>

<section>
    <div class="firebaseApp blog-banner">
        <div class="">
            <div class="row text-center">
                <div class="serimg">
                    <div class="sercon ">
                        <div class="text-start container">
                            <h1>Blog</h1>
                            <p>Unveiling Insights, Trends, and Innovations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Gain Competitive -->

<section class="gain-competitive">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-8 gainCOmp ">
                <h3>Aim for greater organic reach for your business with SEO!</h3>
            </div>
            <div class="col-md-4 getBtn text-end">
				<a href="javascript:void(0);"  class="subscriber-form">Learn more</a>
            </div>
        </div>
    </div>
</section>

<!-- Blog List -->

<section class="blog-page-padd">
    <div class="container">
		<h2 class="error-title text-center" style="padding: 50px 0 70px; font-size: 46px;">Coming Soon!</h2>
        <div class="row d-flow-root">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
            <div class="col-md-4 col-sm-6 bog-artical">
                <div class="bog-details">
                    <?php the_post_thumbnail(); ?>
                    <div class="blog-containt">
<!--                         <span class="blog-category"><?php //the_title(); ?></span> -->
                        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"> <?php echo wp_trim_words( get_the_title(), 6); ?></a></h3>
                        <p class="blog-short-description"><?php echo wp_trim_words( get_the_content(), 28); ?></p>
                        <div class="blog-hover-btn">
                            <a href="<?php the_permalink(); ?>">
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