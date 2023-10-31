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
                        <div class="text-start container">
                            <h1>Contact Us</h1>
                            <p>You know where to find us</p>
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
            <div class="col-lg-6 col-md-6 col-sm-12  min-h2">
                <h3 class="country_name"><img class="country_image" src ="https://bestanimations.com/media/india/911976162india-flag-waving-animated-gif-12.gif"> INDIA</h3>
                <ul class="address">
                    <li><img class="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_2dVYokPTttgdiIq9N946X3rXmxYAKRdM1m7JVQfaYCtmR5Dhge3Ogcv2qS-LrtONNJY&amp;usqp=CAU">
                    <p class=""> 2nd Floor, Halwawala Point, Jamna Nagar
                    BRTS Bus Stand, Canal Road Surat,
                    Gujarat 395007, INDIA</p>
                    <li><img class="location" src="https://static.thenounproject.com/png/52971-200.png"><a href="tel:+91 704 682 7566" class="location_address" >Tel +91 704 682 7566</a></li>
                    <li><img class="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKKVkUUAf0uGakG0j0oNRf8IU28VoTnAVuN1Q77rYraZEAEnOOThbh-LgPUUDfkQlHTDs&usqp=CAU"><a href="mailto: contact@easternts.com" class="location_address">contact@easternts.com</a></li>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 min-h2">
                <h3 class="country_name"><img class="country_image"  src ="https://bestanimations.com/media/australia/96065829autralia-flag-gif-25.gif">AUSTRALIA</h3>
                <ul class="address">
                    <li><img class="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_2dVYokPTttgdiIq9N946X3rXmxYAKRdM1m7JVQfaYCtmR5Dhge3Ogcv2qS-LrtONNJY&amp;usqp=CAU"> 
                    <p class=""> Unit 6 191 Scoresby Road,
                    Boronia, VIC - 3155,
                    <br>Australia</p>
                   <li><img class="location" src="https://static.thenounproject.com/png/52971-200.png"><a  href="tel: +61 420 822 457" class="location_address"> Tel +61 420 822 457</a></li></li>
                    <li><img class="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKKVkUUAf0uGakG0j0oNRf8IU28VoTnAVuN1Q77rYraZEAEnOOThbh-LgPUUDfkQlHTDs&usqp=CAU"> <a href="mailto: contact@easternts.com.au" class="location_address">contact@easternts.com.au</a></li>
                </ul>
            </div>
	
<!--             <div class="col-lg-4 col-md-4 col-sm-12  min-h2">
                <h3 class="country_name"><img class="country_image"  src ="https://thumbs.gfycat.com/AntiqueLittleBear-size_restricted.gif"> UAE</h3>
                <ul class="address">
                    <li> 
                    <img class="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_2dVYokPTttgdiIq9N946X3rXmxYAKRdM1m7JVQfaYCtmR5Dhge3Ogcv2qS-LrtONNJY&amp;usqp=CAU">
                    <p class=""> Unit 6 191 Scoresby Road,
                    <br>Boronia, VIC - 3155,
                    <br>Australia</p>
                    <li><img class="location" src="https://static.thenounproject.com/png/52971-200.png"><a href="tel: +91 704 682 7566" class="location_address"> Tel +91 704 682 7566 </a></li></li>
                    <li><img class="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKKVkUUAf0uGakG0j0oNRf8IU28VoTnAVuN1Q77rYraZEAEnOOThbh-LgPUUDfkQlHTDs&usqp=CAU"> <a href="mailto: contact@easternts.com" class="location_address">contact@easternts.com</a></li>
                </ul>
            </div> -->
	
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.5720449825094!2d72.80870901538671!3d21.16942278833624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e746083caa5%3A0xaae6fb4cb31ad325!2sEastern%20Techno%20Solutions!5e0!3m2!1sen!2sin!4v1673615299240!5m2!1sen!2sin" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
 

<?php get_footer(); ?>