<?php
/*
Don't let this file get too messy with if statements detecting templates
If it makes more sense to have code directly in a template file, do it but continue to use parts where possible
 */
?><?php get_header(); ?>
<?php
if(is_page(5)) {
    get_header();
}
else {
    get_header('common');
}
?>
<?php
if (is_page_template('templates/template-thank-you.php')): ?>
    <?php

    if ($pageId == 37):
        ?>
        <div class="main">
            <div class="container show-feedback">
                <h1 class="page-title">Brain Performance Check</h1>
            </div><!--container-->
        </div><!--main-->

    <?php endif; ?>

    <div class="thanks-panel" >
        <div class="container">
            <?php the_field('thank_you_message'); ?>
        </div><!--container-->
    </div><!--thanks-panel-->
<?php elseif (is_page_template('templates/template-test.php')): ?>

<div class="main">
    <div class="container">
        <?php get_template_part('parts/page-title'); ?>
    </div><!--container-->
    <?php get_template_part('parts/loop'); ?>
</div><!--main-->

<?php else: ?>
<div class="main">
	<div class="container">
		<?php get_template_part('parts/page-title'); ?>
		<?php get_template_part('parts/loop'); ?>

		</div><!--container-->
</div><!--main-->
<?php endif; ?>
<?php get_footer(); ?>