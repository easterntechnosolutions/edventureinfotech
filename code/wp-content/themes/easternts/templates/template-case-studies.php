<?php
/*
    Template Name: Case Studies
*/
?>

<?php get_header();
$args = array( 'post_type' => 'casestudy', 'posts_per_page' => -1 );
$the_query = new WP_Query( $args ); 
?>


<section>
    <div class="firebaseApp customCmsmain">
        <div class="">
            <div class="row text-center">
                <!-- <div class="">
                    <img src="https://www.easternts.com.au/wp-content/uploads/2019/05/App-Development.jpg">
                </div> -->
                <div class="serimg">
                    <div class="sercon ">
                        <div class="text-start container">
                            <h1>Case Studies</h1>
                            <p>Stay technologically ahead </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<!-- Case studies -->
<section class="blog-page-padd">
    <div class="container">
        <div class="row d-flow-root">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
            <div class="col-md-4 col-sm-6 case-studies-box">
                <div class="">
                    <?php the_post_thumbnail(); ?>
                    <!-- <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/12/forward-freight-thumb-img.webp"> -->
                    <div class="case-studies-contain">
                        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="blog-short-description">
                            <?php echo wp_trim_words( get_the_content(), 15); ?>
                        </p>
                    </div>
                    <div class="cs-technology">
                        <span>NodeJs</span>
                        <span>Flutter</span>
                        <span>ReactJs</span>
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

<?php get_template_part("parts/sort-code-our-service"); ?>

<?php get_footer() ?>