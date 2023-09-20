<?php 
/*
Template Name: Demo
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/page-title'); ?>



<section id='get-set' class="p-t-50 p-b-100">
<div class="container">
<div class="heading-section">
<h3 class="mb-2 title-h3">Our Projects</h3>
<p class="fa-par">The surges in the demand, is never ending. While we execute the projects
with utmost care & commitment, we also strive to provide excellent after sale
service</p>
<p class="fa-par">CoolLine has, till date, designed & executed thousands of installations of
DAIKIN air conditioning systems, in multiple sectors like residences,
commercial buildings, cafes & restaurants, shopping malls, clubs & resorts,
hospitals, etc. With a highly dedicated & skilled team, CoolLine has been
successful in implementing projects, within the stipulated time, providing
highest quality services</p>
</div>
</div>
</section>

<?php
global $post;
$terms = get_terms('project_category');
// print_r($terms);  
foreach ( $terms as $term ) $cats_array[] = $term->term_id;
    $query_args = array(
    'post_status' => 'publish', 
    'post_type' => 'project', 
    'tax_query' => array(
        array(
            'taxonomy' => 'project_category',
            'field' => 'slug',
            'terms' => $term->slug,
            'orderby' => 'date',
        )
    )
);
$loop = new WP_Query( $query_args );
?>




<div class="wrapper">
    <nav class="grid-filter gf-outline text-center mb-5" data-layout="#portfolio">
        <div class="button-group filters-button-group">
                <button class="button is-checked " data-filter="*">All</button>       
                <?php foreach ( $terms as $term ) { ?>
                <button class="button" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
                <?php } ?>        
        </div>
    </nav>


    <div class="grid" id="portfolio">
        <?php
        while ( $loop->have_posts() ) : $loop->the_post(); global $post; 
        $terms_project = get_the_terms( get_the_ID(), 'project_category' ); 
        $terms_category = join(' ', wp_list_pluck( $terms_project , 'slug') ); ?>
        <div id="csr_gallery_light" class="">
            <div class="hip-grid " id="photo-gallery">
                <div class="element-item  photogallery-block portfolio-item shadow col-sm-3 col-xs-12 wow fadeInUp<?php echo $terms_category; ?>" data-category="transition">
                    <a href="" class="photozoom">
                        <div class=" portfolio-item-wrap " data-wow-duration="300ms">
							<div class="portfolio-image">
                                <figure>
                                     <?php //the_post_thumbnail(); ?> 
                                </figure>
                            </div>
                          </div>
                            <div class="portfolio-description">
                                <h3><?php the_field('project_title'); ?></h3><span><?php the_field('project_description'); ?></span>
                            </div>
						  </a>
							<div  class="home_page" >
								<?php $gallery = get_field('project_image'); ?>
									<?php echo do_shortcode($gallery); ?>
                            </div>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>