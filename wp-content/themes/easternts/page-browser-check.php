<?php
/**
 * The template for displaying Browser Check
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header('browser');

show_admin_bar(false);

?>

<body>

<div id="page">
    <div class="container">


        <div class="article">
            <div class="content">
<!--                <p>Your browser does <u>not</u> meet the minimum requirements to take the Cogstate Test.</p>-->

                <script>
                    document.write(cogstate_getMinimumBrowserInformation("en-us"));
                </script>
            </div>


            <div class="cards clr">
                <div class="card">
                    <div class="card-inner">
                        <h2 style="text-align:center;">Browser environment check</h2>
                        <ul class="unstyled check-list clr">
                            <script>
                                var checks = cogstate_getBrowserCheckResults("en-Bob");

                                console.log(checks);

                                for (i = 0; i < checks.length; ++i) {
                                    var check = checks[i];

                                    if (isMobile == '1' && w < 768) {
                                        if (check.token != 'checkMobile' && check.token != 'checkSize' && check.token != 'checkModernizer:fontface') {
                                            document.write("<li><span class='check-result result-" + check.result + "'><img src='" + theme_directory + "/images/browser/icon_" + check.result + ".png' /></span><span class='check-label'>" + check.name + ((check.extra) ? (" " + check.extra) : ("")) + "</span></li>");
                                        }
                                    } else {
                                        document.write("<li><span class='check-result result-" + check.result + "'><img src='" + theme_directory + "/images/browser/icon_" + check.result + ".png' /></span><span class='check-label'>" + check.name + ((check.extra) ? (" " + check.extra) : ("")) + "</span></li>");
                                    }
                                }
                            </script>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>



