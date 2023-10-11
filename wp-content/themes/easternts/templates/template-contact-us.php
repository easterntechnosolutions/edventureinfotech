<?php
/*
 Template Name: Contact Us
*/
?>
<?php get_header(); ?>

<section class="">
    <div class="contactus">
        <div class="">
            <div class="row text-center">
                <!-- <div class="">
                    <img src="https://www.easternts.com.au/wp-content/uploads/2019/05/App-Development.jpg">
                </div> -->
                <div class="serimg">
                    <div class="sercon ">
                        <div class="text-center container">
                            <h1>Contact Us</h1>
                            <p class="wow fadeInUp">Connect with Our Digital Experts to Transform Your Vision into Reality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Gain Competitive -->

<section class="office_address">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-4 col-sm-12 min-h2 contact-about">
                <h3 class="country_name">Edventure Infotech</h3>
                <ul class="address">
                    <li>
                        <!-- <img class="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_2dVYokPTttgdiIq9N946X3rXmxYAKRdM1m7JVQfaYCtmR5Dhge3Ogcv2qS-LrtONNJY&amp;usqp=CAU">  -->
                        <p>Share insights about your business and development goals, and let us customize a service package just for you. We're eager to connect and bring your vision to life.</p>
                    </li>    
                </ul>   
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 min-h2 contact-hours">
                <h3 class="country_name">Working Hours</h3>
                <ul class="address" style="padding: 20px 0 0 0;">
                    <li>
                        <p>Week Days : 9am - 5pm</p>
                        <p>Saturday - Sunday : Day Off</p>
                    </li>    
                </ul>
                <h4 class="country_name"><b>We Are Social</b></h4>
                <ul class="etsSocial">
                    <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="" target="_blank"><i class="fab fa-twitter"></i> </a></li>
                    <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 min-h2 cotact-details">
                <h3 class="country_name">Contact Details</h3>
                <ul class="address">
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p class=""> 
                            1295 Dundas Street, Unit 2,
                            <br> Woodstock, Ontario N4S 7V9,                    
                            <br> Canada
                        </p>
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>                       
                        <a  href="tel: +00 000 000 000" class="location_address"> Tel +00 000 000 000</a>                        
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>                        
                        <a href="mailto: info@edventureinfotech.com" class="location_address">info@edventureinfotech.com</a>
                    </li>
                </ul>
            </div>
            
            

        </div>
    </div>
</section>


<section class="contact-form pb-5 ets-contact-form" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="fireAdd text-center mb-3">
                <h2> Leave us a Message</h2>
            </div>
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="vc_column-inner">
                    <div class="qodef-column-inner">
                        <?php echo do_shortcode('[contact-form-7 id="295" title="Contact Us"]'); ?>
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
    </div>
</section>


<section class="map-section">
    <div class="col-sm-12">
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9792.7953105239!2d-80.72203229864044!3d43.137804245604805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882c19f39d7a9b23%3A0xd12d58ef8b5c067!2sEdventure%20Infotech!5e0!3m2!1sen!2sin!4v1695728014012!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </div>
    </div>
</section>
 

<?php get_footer(); ?>