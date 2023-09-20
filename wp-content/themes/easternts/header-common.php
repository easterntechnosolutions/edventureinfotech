<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

    <title><?php wp_title('-'); ?></title>

    <meta charset="utf-8" />
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Favicons and Icons -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-touch.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <!-- or, set /favicon.ico for IE10 win -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/base-dark.css">
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/browser-check-info.js'></script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr-custom.js'></script>
    <script>
        var theme_directory = "<?php echo get_template_directory_uri() ?>";
        var isMobile = '<?php echo wp_is_mobile(); ?>';
        var w = screen.width;
        var h = screen.height;
    </script>
    <!-- end of wordpress head -->
</head>

<body <?php body_class(); ?>>


