<?php
/*
Template Name: Client
*/
?>
  
  <?php get_header(); ?>
  
  <section>
      <div class="firebaseApp">
          <div class="">
              <div class="row text-center">
                  <div class="serimg">
                      <div class="sercon ">
                          <div class="text-start container">
                                <h1><?php the_title(); ?></h1>
                                <p>
                                    Empowering Success Stories through our Valued Partners and Clients
                                </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <!--  Gain Competitive -->

<!-- Why to Choose US? -->

<section class="sectionPadd whay-choose-bkcolor" style="background-color:#fff;">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12 ProcssWork text-center">
                <p>
                    Edventure InfoTech has emerged as a top-tier web and app development agency in Ontario, Canada. With our extensive expertise, we effectively serve a wide spectrum of businesses. Leveraging our knowledge and resources, we deliver customized solutions to every client. Below, you'll find the esteemed brands that form a part of Edventure InfoTech’s valued network.    
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="ourClint"><?php 
                if( have_rows('clients_logos') ):
                while( have_rows('clients_logos') ): the_row();
                $image = get_sub_field('clients_image_colorful');
                $image2 = get_sub_field('clients_image_black');
                $title = $image['title'];
                $title2 = $image2['title'];
                ?><div class="col-md-3 col-sm-4 col-6 clitCard">
                    <a href="JavaScript:void(0);">
                        <span class="ourClintImag"><img src="<?php echo esc_url($image['url']); ?>"   alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($title); ?>"></span>
                        <span class="ourClintImagHover"><img src="<?php  echo esc_url($image2['url']); ?>"  alt="<?php echo esc_attr($image2['alt']); ?>" title="<?php echo esc_attr($title2); ?>"></span>
                    </a>
                </div><?php
                endwhile; 
                endif; 
            ?></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>