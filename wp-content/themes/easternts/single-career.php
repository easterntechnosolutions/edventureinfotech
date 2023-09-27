<?php get_header();
$args = array( 'post_type' => 'career', 'posts_per_page' => -1 );
$the_query = new WP_Query( $args ); 
?>

<section>
    <div class="firebaseApp">
        <div class="">
            <div class="row text-center">
                <!-- <div class="">
                    <img src="https://www.easternts.com.au/wp-content/uploads/2019/05/App-Development.jpg">
                </div> -->
                <div class="serimg">
                    <div class="sercon ">
                        <div class="text-start container">
                            <h1><?php the_title(); ?> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sectionPadd ">
      <div class="container">
            <div class="row">
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
                  <div class="col-md-3 apply-btn-relative">
                        <div class="apply-btn-sticky">
                              <div class="blog-hover-btn mt-5 mt-lg-0">
                              <a href="<?php the_permalink(533); ?>#contact-form" class="career-btn">
                                    <svg class="icon-arrow before">
                                          <use xlink:href="#arrow"></use>
                                    </svg>
                                    <span class="label">APPLY NOW</span>
                                    <svg class="icon-arrow after">
                                          <use xlink:href="#arrow"></use>
                                    </svg>
                              </a>
                              <svg style="display: none;">
                                    <defs>
                                          <symbol id="arrow" viewBox="0 0 35 15">
                                          <title>Arrow</title>
                                          <path d="M27.172 5L25 2.828 27.828 0 34.9 7.071l-7.07 7.071L25 11.314 27.314 9H0V5h27.172z "></path>
                                          </symbol>
                                    </defs>
                              </svg>
                              </div>
                              <ul class="etsSocial career-icon">
                                    <li><a href="https://www.facebook.com/EasternTechnoSolutions" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/eastern-techno-solutions" target="_blank" ><i class="fab fa-linkedin-in"></i> </a></li>
                                    <li><a href="https://www.instagram.com/easterntechnosolutions" target="_blank"><i class="fab fa-instagram"></i></a></li>
                              </ul>
                        </div>
                  </div>
            </div>
      
      </div>
</section>


<?php if( get_field('set_tool_section_in_career') == 'enable' ): ?>
      <section class="sectionPadd bg-orange pb-5 ">
            <div class="container">
                  <div class="fireAdd text-center">
                        <div class="row">
                              <div class="fireAdd text-center">
                                    <h2><?php the_field('career_heading'); ?></h2>
                              </div>
                        </div>

                        <div class="row">
                              <div class="col-lg-12 services-list-fresh cover-all-industries-mobile-aap-development">
                                    <?php if( have_rows('details_of_tool') ): ?>
                                          <ul>
                                                <?php while( have_rows('details_of_tool') ): the_row(); 
                                                      $image = get_sub_field('tool_icon');
                                                      ?>
                                                      <li>
                                                            <img class="devlop_icon" src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                                            <h3><b><?php the_sub_field('tool_name'); ?> </b></h3>
                                                            <p><?php the_sub_field('tool_description'); ?></p>
                                                      </li>
                                                <?php endwhile; ?>
                                          </ul>
                                    <?php endif; ?>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
<?php else : ?>

<?php endif; ?>


<section class="sectionPadd  pb-5 ">
      <div class="container">
            <div class="row">
                  <div class="fireAdd text-center">
                        <h2>What can you expect from us?</h2>
                        <p>We offer a number of benefits, high-quality tools, bad jokes, and a stimulating work environment. We offer a number of benefits, high-quality tools, bad jokes, and a stimulating work environment.</p>
                  </div>
            </div>

            <div class="row career-expect-row mb-sm-5 mb-3">
                  <div class="col-md-3">
                        <div class="expect-title">
                              <h4>01</h4>
                              <h3>Professional development</h3>
                        </div>
                  </div>
                  <div class="col-md-9">
                        <ul class="career-expect">
                              <li>
                                    <h4>Learning & development </h4>
                                    <p>We believe that honest two-way feedback is the foundation of growth. In our bi-weekly one-on-one talks and quarterly 360 reviews, we discuss what’s good and what could be better. </p>
                              </li>
                              <li>
                                    <h4>Versatile projects </h4>
                                    <p>Our teams get to work on very interesting projects for renowned brands and clients from a range of industries, some of which we can’t namedrop due to NDAs. </p>
                              </li>
                              <li>
                                    <h4>Contributing to open source </h4>
                                    <p>Sharing is caring doesn’t only apply to chocolate. Our way of giving back to the community is publishing open-source libraries and resources.</p>
                              </li>
                              <li>
                                    <h4>Paid language courses </h4>
                                    <p>Paid language courses help our employees master the English language, in addition to being fluent in their programming languages. </p>
                              </li>
                              <li>
                                    <h4>Doing a career switch </h4>
                                    <p>We don’t have a sorting hat to tell you where you belong, but we will support your career switch from one job position to another. More info here. </p>
                              </li>
                              <li>
                                    <h4>Traveling on business </h4>
                                    <p>Having clients all over the world means our employees sometimes have to travel to and work from beautiful locations. Gotta do what you gotta do. </p>
                              </li>
                        </ul>
                  </div>
            </div>

            <div class="row career-expect-row mb-sm-5 mb-3">
                  <div class="col-md-3">
                        <div class="expect-title">
                              <h4>02</h4>
                              <h3>Health <br>& Family life</h3>
                        </div>
                  </div>
                  <div class="col-md-9">
                        <ul class="career-expect">
                              <li>
                                    <h4>Subsidized recreation </h4>
                                    <p>Stay in shape with a sponsored fitness membership of your choice. You never know when the elevator is going to go out of order. </p>
                              </li>
                              <li>
                                    <h4>Sponsored health checks </h4>
                                    <p>You know the old saying – the greatest wealth is health. Regular health checks are on us, getting your five-a-day in is on you. </p>
                              </li>
                              <li>
                                    <h4>Flexible working hours </h4>
                                    <p>Hate waking up very early or fancy going for a run at the lunch break? Tailor your working hours to fit your schedule. </p>
                              </li>
                              <li>
                                    <h4>Paid vacation for everyone </h4>
                                    <p>Students or non-students, everybody deserves a carefree time-out to recharge their batteries. Bon voyage! </p>
                              </li>
                        </ul>
                  </div>
            </div>

            <div class="row career-expect-row mb-sm-5 mb-3">
                  <div class="col-md-3">
                        <div class="expect-title">
                              <h4>03</h4>
                              <h3>Around <br>the office</h3>
                        </div>
                  </div>
                  <div class="col-md-9">
                        <ul class="career-expect">
                              <li>
                                    <h4>Free power-ups</h4>
                                    <p>Snack on fruit, cookies, and nuts to keep your energy levels up, then pour a cup of strong tea or coffee over it for a good measure. </p>
                              </li>
                              <li>
                                    <h4>Car and bike parking</h4>
                                    <p>Whether your ride comes on two wheels or four, don’t let it get caught in the rain. We offer free parking for bicycles and subsidize car parking. </p>
                              </li>
                              <li>
                                    <h4>Working remotely </h4>
                                    <p>We like people who go the extra mile, so we don’t let miles and kilometers limit us. Office location? Anywhere. It’s all about flexibility. </p>
                              </li>
                              <li>
                                    <h4>Fun and games budget </h4>
                                    <p>Every team gets a monthly budget to hang out and do fun stuff. While foodie teams love restaurant hopping, adrenaline seekers prefer to get locked up in escape rooms. </p>
                              </li>
                              <li>
                                    <h4>Bring your dog to work </h4>
                                    <p>If your four-legged friend doesn’t eat MacBooks, let him tag along. Your colleagues will appreciate the stress relief. </p>
                              </li>
                              
                        </ul>
                  </div>
            </div>
           
            <div class="blog-hover-btn text-center center-btn-margin">
                  <a href="<?php the_permalink(533); ?>" class="career-btn">
                        <svg class="icon-arrow before">
                        <use xlink:href="#arrow"></use>
                        </svg>
                        <span class="label">APPLY NOW</span>
                        <svg class="icon-arrow after">
                        <use xlink:href="#arrow"></use>
                        </svg>
                  </a>
                  <svg style="display: none;">
                        <defs>
                        <symbol id="arrow" viewBox="0 0 35 15">
                              <title>Arrow</title>
                              <path d="M27.172 5L25 2.828 27.828 0 34.9 7.071l-7.07 7.071L25 11.314 27.314 9H0V5h27.172z "></path>
                        </symbol>
                        </defs>
                  </svg>
            </div>
      </div>
</section>


<!-- Industry We Serve -->

<section class="sectionPadd bg-orange1 d-none">
    <div class="container">
        <div class="row">
            <div class="fireAdd  ">
                <h2>Industry We Serve </h2>
                <p>We provide innovative solutions for following industries.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Aerospace" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_aerospace.svg">
                  <p>Aerospace</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Agriculture" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_agriculture.svg">
                  <p>Agriculture</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Banking" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_retail.svg">
                  <p>Banking</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Construction" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_construction.svg">
                  <p>Construction</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Ecommerce" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_ecommerce.svg">
                  <p>Ecommerce</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Education" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_education.svg">
                  <p>Education</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Technology" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_logistic.svg">
                  <p>Technology</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Engineering" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_engineering.svg">
                  <p>Engineering</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Fashion" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_fashion.svg">
                  <p>Fashion</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Finance" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_finance.svg">
                  <p>Finance</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Health Care" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_health_care.svg">
                  <p>Health Care</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Insurance" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_insurance.svg">
                  <p>Insurance</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Manufacturing" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_manufacturing.svg">
                  <p>Manufacturing</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Mining" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_mining.svg">
                  <p>Mining</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="oil-gas" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_oil_gas.svg">
                  <p>Oil &amp; Gas</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Pharmaceutical" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_pharma.svg">
                  <p>Pharma</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Telecom" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_telecom.svg">
                  <p>Telecom</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 center">
               <div class="industry-image card-hover card">
                  <img alt="Transport" src="https://www.sapphiresolutions.net/resources/images/industry-we-serve-ic/ic_transport.svg">
                  <p>Transport</p>
               </div>
            </div>
         </div>

    </div>
</section>

<?php get_footer(); ?>