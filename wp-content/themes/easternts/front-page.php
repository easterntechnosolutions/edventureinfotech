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
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/11/iphone-Development-1.webp" alt="iphone" width="41" height="41">
                        <h4>iPhone App Development</h4>
                        <p>We possess extensive expertise in crafting iOS applications through a dedicated team. Our unwavering dedication to delivering top-notch quality sets us apart. Additionally, we prioritize transparent communication with our clients, providing regular updates on project progress.</p>
                        <a href="<?php echo get_permalink(44); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/11/android-development-1.webp" alt="android" width="41" height="41">
                        <h4> Android App Development </h4>
                        <p>When it comes to design, graphics, code, or animation, we have excelled in all the possible areas of building an application. We at "Eastern Techno Solutions" provide the exact requirements determined by the client.</p>
                        <a href="<?php echo get_permalink(43); ?>">Read More...</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/11/flutter.webp" alt="flutter" width="41" height="41">
                        <h4>Flutter App Development </h4>
                        <p>The user interface of your application should not be a restriction on what your application can do. Through our Native App Development in Flutter, we can develop your app compatible with both Android and iOS users.</p>
                        <a href="<?php echo get_permalink(27); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/11/laravel_icon_01.webp" alt="laravel" width="41" height="41">
                        <h4>Laravel Development </h4>
                        <p>Laravel is one of the most powerful and elegant PHP frameworks that enables you to build web applications with ease, yet in a meaningful manner. With our help, you can build a website according to your specifications.</p>
                        <a href="<?php echo get_permalink(704); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/11/e-commerce-1.webp" alt="ecommerce" width="41" height="41">
                        <h4>E-Commerce </h4>
                        <p>E-commerce refers to commercial transactions conducted electronically on the internet. At "Eastern Techno Solutions", we provide unique eCommerce web development services by creating cutting-edge online storefronts.</p>
                        <a href="<?php echo get_permalink(300); ?>">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ourCards">
                    <div class="ourDetails">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/11/software-development-1.webp" alt="software" width="41" height="41">
                        <h4> Software Development</h4>
                        <p>Software plays a crucial role when it comes to efficiency, accuracy, time-saving, security and affordability. It is our goal at "Eastern Techno Solutions" to ensure the safe delivery of your data without compromising it.</p>
                        <a href="<?php echo get_permalink(710); ?>">Read More...</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="comBtn2 text-center">
                <a href="<?php echo get_permalink(221); ?>" class="comBtn">View All</a>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack -->

<section class="">
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
                <p>A very creative company specializing in web design, web development, mobile app development & digital marketing in Surat - Gujarat (INDIA).</p>
            </div>
        </div>

        <div class="row d-inline">
            <div class="col-md-7 col-sm-12">
                <a href="<?php echo get_permalink(712); ?>">
                    <div class="ourExpert">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/10/mobileapp.gif" alt="mobile" width="" height="">
                        <div class="exportTitle">
                            <h3>Mobile App Development</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-5 col-sm-12 bounceInLeft" data-wow-delay="0.4s">
                <a href="<?php echo get_permalink(713); ?>">
                    <div class="ourExpert ourmarg monileMarg ">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/10/web-design.gif" alt="webdevelopment" width="" height="">
                        <div class="exportTitle">
                            <h3>Web Application</h3>
                        </div>
                    </div>
                </a>
                <a href="<?php echo get_permalink(714); ?>">
                    <div class="ourExpert ourmarg">
                        <img src="http://localhost/edventureinfotech/wp-content/uploads/2021/10/web-development.gif" alt="creative" width="" height="">
                        <div class="exportTitle">
                            <h3>Web Development</h3>
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