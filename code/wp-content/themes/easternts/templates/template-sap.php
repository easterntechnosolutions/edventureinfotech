<?php
/*
@Template Name: SAP 
*/
?>
<!--  -->

<!-- <section>
    <div class="container-fluid">
        <div class="row">

        </div>
    </div>
</section> -->

<?php get_header() ?>

<section>
    <div class="firebaseApp sap-banner">
        <div class="">
            <div class="row text-center">
                <div class="serimg">
                    <div class="sercon ">
                        <div class="text-start container">
                            <h1>SAP</h1>
                            <p>Unleash the Power of Next-Generation ERP</p>
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
            <div class="col-md-8 gainCOmp" >
                <h3 >Reimagine Business with Simplified Operations.</h3>
            </div>
            <div class="col-md-4 getBtn text-end">
                <a href="javascript:void(0);" class="subscriber-form">Call US Today !</a>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container-fluid p0">
        <div class="row appFlex">
            <div class="col-md-6 p0">
                <img src="../../wp-content/uploads/2023/10/sap-1.webp"  class="wow fadeInLeft" data-wow-delay="0.2s"  data-wow-duration="3s" style="width: 1000px;height: auto;" alt="ux1">
            </div>
            <div class="col-md-6 order2  p0">
                <div class="zigZ">
                    <h2><b>What is SAP?</b></h2>
                    <p>
                        SAP stands for Systems, Applications, and Products in Data Processing. It is a multinational software corporation that creates enterprise software to manage business operations and customer relations. SAP software is designed to help organizations streamline their processes, enhance productivity, and make data-driven decisions. It covers various aspects of business operations such as finance, human resources, procurement, manufacturing, sales, and more. SAP is known for its Enterprise Resource Planning (ERP) systems, which integrate different functions within an organization into a unified system.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="">
    <div class="container-fluid p0">
        <div class="row appFlex">
            <div class="col-md-6 order2 p0">
                <img src="../../wp-content/uploads/2023/10/sap-2.webp" class="wow fadeInRight"  data-wow-delay="0.2s" data-wow-duration="3s" style="width: 1000px;height: auto;" alt="ux2">
            </div>
            <div class="col-md-6 p0">
                <div class="zigZ">
                    <h2><b>Why use SAP?</b></h2>
                    <p>
                        SAP offers a wide range of software solutions tailored for different industries and business sizes. Their products are used by companies around the world to manage their day-to-day operations efficiently and effectively. The company also provides cloud-based solutions, analytics, and other technologies to support digital transformation efforts in businesses of all scales.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SAP Functions in Business Operations -->
<?php get_template_part("parts/short-code-sap-function"); ?>

<!-- We offer following SEO services -->

<section class="sectionPadd sap-sevices-section">
    <div class="container p-0">
        <div class="row">
            <div class="col-sm-12 fireAdd text-center">
                <h2>We offer following SAP Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="seo-serices seo-serices-follow">                
                <div class="sap-card">
                    <a href="<?php echo get_permalink(9753); ?>">
                        <div class="d-flex sec-capabilities">
                            <!-- <img src=""> -->
                            <i class="fas fa-cogs"></i>
                            <h3>SAP S/4 HANA</h3>
                        </div>
                        <p style="color: #333">SAP S/4 HANA is an enterprise resource planning (ERP) software suite developed by SAP SE, a multinational software corporation. It represents the next-generation ERP system, built on the advanced in-memory database platform called SAP HANA.</p>
                    </a>
                </div>
            </div>
            <div class="seo-serices seo-serices-follow">
                <div class="sap-card">
                    <a href="<?php echo get_permalink(9755); ?>">
                        <div class="d-flex sec-capabilities">
                            <!-- <img src=""> -->
                            <i class="fas fa-cogs"></i>
                            <h3>SAP S/4 HANA Cloud</h3>
                        </div>
                        <p style="color: #333">SAP S/4 HANA Cloud is the cloud-based version of SAP's next-generation Enterprise Resource Planning (ERP) software, SAP S/4HANA. It provides businesses with a comprehensive suite of integrated applications to manage various aspects of their operations.</p>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Build your app to reach far and wide! -->

<?php get_template_part("parts/sort-code-build-your-app"); ?>

<!-- Our Services -->

<?php get_template_part("parts/sort-code-our-service"); ?>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<?php get_footer() ?>