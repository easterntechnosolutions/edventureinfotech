<?php
/*
 Template Name: Career
*/
?>

<?php get_header(); ?>

<section>
    <div class="career">
        <div class="">
            <div class="row text-center">
                <div class="serimg">
                    <div class="sercon ">
                        <div class="text-start container">
                            <h1> Career </h1>
                            <p>Join Our Team of Innovators, Shape the Digital Future!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $args = array(
        'post_type' => 'career',
        'post_status' => 'publish',
        'posts_per_page' => 10,
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()):
?>

<section class="career_details">
    <div class="container">
        <div class="row">
              <?php
              while ($loop->have_posts()) : $loop->the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box">
                  <div class="career_img">
                    <p class="developer_name"><?php the_title(); ?></p>                        
                        <?php $image = get_field('career_icon');
					    if( !empty($image)): ?>
						    <img class="devlop_icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  title="career icon"/>
					    <?php endif; ?>
                  </div>
                  <p class="developer_name"><?php the_field('career_title'); ?></p>
                    <div class="posi-exp">
                        <ul>
                        <li><?php the_field('year_of_experience'); ?></li>
                        <li>Position: <?php the_field('position'); ?></li>
                        </ul>
                    </div>       
                    <div class="career-apply">
                        <a class="view-details" href="<?php the_permalink(); ?>">View More</a>
                        <a class="view-details contact-details" href="#contact-form"> Apply Now</a>
                    </div>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
        </div>
    </div>
</section>

<section class="contact-form ets-contact-form" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="fireAdd text-center mb-3">
                <h2> Send us a Message</h2>
            </div>
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="vc_column-inner">
                    <div class="qodef-column-inner">
                        <?php echo do_shortcode('[contact-form-7 id="762" title="Career form"]'); ?>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LcGgWEdAAAAAFFNgHZ3XunJqplVkgkbC_iq10B0" data-callback="recaptchaCallback"></div>
                                <label id="reCaptchaError" class="" for=""></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<?php get_footer(); ?>