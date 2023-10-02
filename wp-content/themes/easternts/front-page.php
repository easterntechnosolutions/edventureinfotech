<?php

/**
 * The front-page.php corresponds to the "static front page" when setting static front page in Settings > Reading 
 */
?><?php get_header(); ?>


<!-- We develope -->

<section class="colororang">
    <div class="container ">
        <div class="row text-center developBeautiful">
            <h4>We develop Beautiful native apps in record time with Flutter.
                <a href="<?php the_permalink(27); ?>">Get Started</a>
            </h4>
        </div>
    </div>
</section>

<!-- Hero section -->

<section>
    <div class="Hero-back">
        <div class="container">
            <div class="row text-center">
                <p>We specialize in offering innovative web design, web development, and mobile development services based in Ontario, Canada.</p>
                 <!-- <h3 class="typeText"></h3> -->
            </div>
        </div>
    </div>
</section>

<!--  Gain Competitive -->

<section class="gain-competitive">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-8 gainCOmp ">
                <h3>Elevate Your Business with Cutting-Edge Digital Solutions</h3>
            </div>
            <div class="col-md-4 getBtn text-end">
				 <button class="subscriber-form  free-quote "> Get a Free Quote </button>
<!--                 <a herf="#"  class="subscriber-form pum-trigger "> Get a Free Quote </a> -->
            </div>
        </div>
    </div>
</section>

<!-- Our Services -->

<section class="sectionPadd">
    <div class="container">
        <div class="row ">
            <div class="OurServices text-center">
                <h2>What We Offer</h2>
                <p>Empowering Your Digital Journey with Expert Services</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="../../wp-content/uploads/2021/11/iphone-Development-1.webp" alt="iphone" width="41" height="41">
                        <h4>iPhone App Development</h4>
                        <p>We possess extensive expertise in crafting iOS applications through a dedicated team. Our unwavering dedication to delivering top-notch quality sets us apart. Additionally, we prioritize transparent communication with our clients, providing regular updates on project progress.</p>
                        <a href="<?php echo get_permalink(44); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="../../wp-content/uploads/2021/11/android-development-1.webp" alt="android" width="41" height="41">
                        <h4> Android App Development </h4>

                        <p>In the realms of design, graphics, code, and animation, we have demonstrated exceptional proficiency in every facet of application development. At 'EDVENTURE INFOTECH,' we meticulously deliver precisely what our clients envision and require.</p>
                        <a href="<?php echo get_permalink(43); ?>">Read More...</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="../../wp-content/uploads/2021/11/flutter.webp" alt="flutter" width="41" height="41">
                        <h4>Flutter App Development </h4>
                        <p>Break free from limitations imposed by your app's user interface. With our expertise in Native App Development using Flutter, we create applications that seamlessly cater to both Android and iOS users, ensuring a versatile and inclusive user experience for all customers.</p>
                        <a href="<?php echo get_permalink(27); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="../../wp-content/uploads/2021/11/laravel_icon_01.webp" alt="laravel" width="41" height="41">
                        <h4>Laravel Development </h4>
                        <p>Laravel stands as a robust and sophisticated PHP framework, facilitating the streamlined development of web applications with both simplicity and depth. Our expertise empowers you to craft a website tailored precisely to your unique specifications.</p>
                        <a href="<?php echo get_permalink(704); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="../../wp-content/uploads/2021/11/e-commerce-1.webp" alt="ecommerce" width="41" height="41">
                        <h4>E-Commerce </h4>

                        <p>We specialize in crafting state-of-the-art eCommerce platforms, enabling electronic commercial transactions on the internet. Our expertise lies in delivering unique web development services, creating innovative online storefronts for seamless digital commerce experiences.</p>

                        <a href="<?php echo get_permalink(300); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="../../wp-content/uploads/2021/11/software-development-1.webp" alt="software" width="41" height="41">
                        <h4> Software Development</h4>

                        <p>At 'EDVENTURE INFOTECH', we understand that software is pivotal for enhancing efficiency, accuracy, time-saving, security, and affordability. Our foremost objective is to guarantee the secure transmission of your data, preserving its integrity.</p>

                        <a href="<?php echo get_permalink(710); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center" style="margin: 17px 0;">
                <a href="<?php echo get_permalink(221); ?>" class="comBtn" style="margin-top: 50px;">View All</a>
            </div>
        </div>

        <!-- <div class="row ">
            <div class="comBtn2 text-center">
                <a href="<?php echo get_permalink(221); ?>" class="comBtn">View All</a>
            </div>
        </div> -->

    </div>
</section>

<!-- Technology Stack -->

<section class="sectionPadd" style="background-color: rgb(246, 246, 246);">
    <div class="container">
        <div class="row">
            <div class="OurServices text-center">
                <h2>Technology Stack</h2>
                 <!-- <h1>ETS Projects</h1> -->
                <p>Building Tomorrow's Solutions with Cutting-Edge Tech Stack</p>
            </div>
        </div>
        <div class="row techno-stack">
            <?php do_shortcode("[technology_stack]"); ?>
        </div>
    </div>
</section>

<!-- Our Expertise  -->

<section class="sectionPadd secPaddtable">
    <div class="container">
        <div class="row">
            <div class="OurServices text-center">
                <h2>Our Expertise</h2>
                <p>Mastering the Craft, Delivering Excellence</p>
            </div>
        </div>

        <div class="row d-inline">
			
			<div class="col-md-6 col-sm-12 bounceInLeft" data-wow-delay="0.4s">
                <a href="<?php echo get_permalink(712); ?>">

                    <div class="ourExpert ourmarg">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2023/09/mob-dev.gif" alt="mobile" width="" height="">

                        <div class="exportTitle">
                            <h3>Mobile App Development</h3>
                        </div>
                    </div>
                </a>

                <a href="<?php echo get_permalink(714); ?>">
                    <div class="ourExpert ourmarg">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2023/09/web-dev1.gif" alt="creative" width="" height="">

                        <div class="exportTitle">
                            <h3>Web Development</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-12 bounceInLeft" data-wow-delay="0.4s">
                <a href="<?php echo get_permalink(9740); ?>">
                    <div class="ourExpert ourmarg">

                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2023/09/pos-1.gif" alt="creative" width="" height="">

                        <div class="exportTitle">
                            <h3>SAP</h3>
                        </div>
                    </div>
                </a>
                <a href="<?php echo get_permalink(713); ?>">
                    <div class="ourExpert ourmarg">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2023/09/web-dev.gif" alt="webdevelopment" width="" height="">
                        <div class="exportTitle">
                            <h3>Web Application</h3>
                        </div>
                    </div>
                </a>                
            </div>
			
        </div>
    </div>
</section>

<!-- We can help -->

<!-- <section class="weCanhalp ">
    <img class="weImg weLf" src="https://www.easternts.com.au/wp-content/uploads/2020/03/call-ets1.png">
    <img class="weImg weRf" src="https://www.easternts.com.au/wp-content/uploads/2020/03/call-ets2.png">
    <div class="container ">
        <div class="row text-center">
            <div class="weCan">
                <h3>We can help you build what you have been thinking about.</h3>
            </div>
            <div class="comBtn2 text-center">
                <a href="/" class="comBtn">Call Us </a>
            </div>
        </div>
    </div>
</section> -->

<!-- Subscribe newsletter -->
<!-- 
<section class="subNew">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-5 SubPadd">
                <h3>Subscribe to our <span class="colororeang">newsletter</span></h3>
            </div>
            <div class="col-md-7 SubPadd">
                <div class="row">
                    <div class=" col-md-7 col-sm-7 SubPadd">
                        <input type="gmail" class="emailInput" placeholder="Email">
                    </div>

                    <div class="comBtn2 col-md-5 col-sm-5  SubPadd text-center">
                        <a href="" class="subbtn">Subscribe </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->



<?php get_footer(); ?>