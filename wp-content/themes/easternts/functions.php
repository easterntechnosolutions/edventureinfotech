<?php

// The Launch
add_action('after_setup_theme', function () {
	// Launch Theme Supports AFTER theme setup
	// Custom Thumbnail Sizes - Defined further on in this file.
	// Enables featured images. We usually use ACF so disabled by default
	//add_theme_support('post-thumbnails');
	// Default 'Featured' Thumbnail Image Size
	//set_post_thumbnail_size( 125, 125, true );

	// Post Format Options
	// add_theme_support(
	// 	'post-formats',
	// 	array(
	// 		'video',
	// 		'audio',
	// 	)
	// );

	// WordPress Nav Menus
	add_theme_support('menus');
	add_theme_support('html5', array('search-form'));
});


// Hiren SVG supported
function enable_svg_upload($upload_mimes)
{
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
}
add_filter('upload_mimes', 'enable_svg_upload', 10, 1);



// The Head Cleanup - clean up of WordPress head, taken from Bones Theme
add_action('init', function () {

	//give editors permissions
	$role_object = get_role('editor');
	// to change menus
	$role_object->add_cap('edit_theme_options');

	// EditURI link
	remove_action('wp_head', 'rsd_link');
	// windows live writer
	remove_action('wp_head', 'wlwmanifest_link');
	// index link
	remove_action('wp_head', 'index_rel_link');
	// previous link
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	// start link
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	// links for adjacent posts
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	// WP version
	remove_action('wp_head', 'wp_generator');

	// Remove WordPress version from css
	add_filter('style_loader_src', 'remove_wp_ver_css_js', 9999);
	// Remove WordPress version from scripts
	add_filter('script_loader_src', 'remove_wp_ver_css_js', 9999);
});

// Remove WordPress version from RSS
add_filter('the_generator', function () {
	return '';
});


function remove_wp_block_library_css()
{
	if (!is_singular('post')) {
		wp_dequeue_style('wp-block-library');
	}
}
add_action('wp_enqueue_scripts', 'remove_wp_block_library_css');


// Remove WordPress version from scripts
function remove_wp_ver_css_js($src)
{
	if (strpos($src, 'ver='))
		$src = remove_query_arg('ver', $src);
	return $src;
}
// Enqueue base CSS & Javascripts


// CSS & Javascript Assets
add_action('wp_enqueue_scripts', function () {
	global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
	if (!is_admin()) {
		//main stylesheet (compiled by compass)
		//      wp_register_style( 'googlefont', "//fonts.googleapis.com/css?family=Open+Sans:400,700");
		//wp_register_script( $handle, $src, $deps, $ver, $in_footer );         
		//load our own jquery cause bundled is in compatibility mode, ie $ doesn't work
		wp_deregister_script('jquery');
		wp_dequeue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, true, false);
		?>
<?php 
		// Enqueue CSS
		//      wp_enqueue_style('googlefont'); 
		// Enqueue JS
	}
});


add_action('wp_footer', 'add_js_footer_function');
function add_js_footer_function()
{
	global $wp_styles;
	if (!is_admin()) {
		wp_deregister_script('jquery');

		wp_enqueue_script('font nunito', get_template_directory_uri("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"), true);
		wp_enqueue_script('font awesome', get_template_directory_uri("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"), true);
		
		// wp_enqueue_script('owl css', get_template_directory_uri("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"), true);
		wp_register_script('toggle', get_template_directory_uri() . '/js/toggle.js', false, true, false);
		wp_register_script('owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', false, false, false);
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, false, false);
		
		wp_enqueue_script('wow-min', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', false, true, false);
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('toggle');
		wp_enqueue_script('owl-js');
// 		wp_enqueue_script( 'animation-script', get_template_directory_uri() . '/js/aos.js');


?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/main.css';  ?>" type='text/css' media='all' as="style" onload="this.rel='stylesheet'">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/bootst.css';  ?>" type='text/css' media='all' as="style" >
		<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type='text/css' media='all' as="style" onload="this.rel='stylesheet'">	

		<!-- <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" type='text/css' media='all' as="style" onload="this.rel='stylesheet'"> -->
		<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type='text/css' media='all' as="style" onload="this.rel='stylesheet'">

		<!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet"> -->
	<?php
	}
}


add_action( 'wp_footer', 'add_js_footer_functions', 50 );
function add_js_footer_functions() {
	if ( is_front_page() || is_home() ) { ?>

	<script>
    jQuery('.technical-tk-ul ul li').hover(function() {
		  jQuery(this).addClass('active');
		  jQuery('.technical-stack-main').addClass('index-top');
	    }, function(){
		  jQuery(this).removeClass('active');
		  jQuery('.technical-stack-main').removeClass('index-top');
	    });
	</script>
	<script>
	setTimeout(function(){

jQuery('[title]').hover(
function(e) {
	  jQuery(this).attr('title','');
	 e.preventDefault();
   },
   function() { }
);

}, 100);
var ajaxurl = "https://www.easternts.com.au/wp-admin/admin-ajax.php";
</script>

	<?php
	}
}

add_action('wp_footer', 'add_javascript_footer_function', 50, 1);
function add_javascript_footer_function()
{ ?>

	<script>
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 4,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 1000,
			autoplayHoverPause: true,
               responsive: {
                    0: {
                         items: 1
                    },
                    500: {
                         items: 2
                    },
                    600: {
                         items: 3
                    },
                    1000: {
                         items: 5  
                    }
               }
               
		});
		$('.play').on('click', function() {
			owl.trigger('play.owl.autoplay', [1000])
		})
		$('.stop').on('click', function() {
			owl.trigger('stop.owl.autoplay')
		})
	</script>

<?php

}


// Menus & Navigation

// Register WordPress Nav Menus
/* register_nav_menus(
	array(
		'main-menu' => __( 'Main Menu' ),
	)
); */

register_nav_menus(
	array(
		'main-menu' => __('Main Menu'),
		'website-dev' => __('Website Development Menu'),
		'footer-menu' => __( 'Footer Menu' ),
		
	)
);



// Custom Thumbnail Sizes
add_theme_support('post-thumbnails');
add_image_size('large-thumbnail', 300, 300, true);
add_image_size('full-width', 1200, 9999, false);
add_image_size('logo', 300, 119, true);



// Custom Post Types Hook into the 'init' action
// Put Taxonomies that are related to a Post Type in the same file unless taxonomy relates to multiple post types
add_action('init', function () {
	require_once 'post-types/custom-post-type.php';
}, 0);

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

//register an API key for google maps to work in ACF backend. also add to wp_register_script above
//https://developers.google.com/maps/documentation/javascript/get-api-key
function my_acf_google_map_api($api)
{
	$api['key'] = '';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


//enable gforms password field
add_filter('gform_enable_password_field', '__return_true');


//load editor styles
add_action('admin_init', function () {
	add_editor_style();
});

//load additional tinymce buttons
add_filter('mce_buttons_2', function ($buttons) {
	$buttons[] = 'superscript';
	$buttons[] = 'subscript';
	return $buttons;
});

//set gallery link default to media file instead of attachment page
add_filter('media_view_settings', function ($settings) {
	$settings['galleryDefaults']['link'] = 'file';
	//$settings['galleryDefaults']['columns'] = '5';
	return $settings;
});

//remove some sections of admin
add_action('admin_menu', function () {
	//lower than admin
	if (!current_user_can('activate_plugins')) {
		//remove_menu_page('edit.php');//posts
		remove_menu_page('tools.php');
	}
	//everyone
	remove_menu_page('edit-comments.php');
});

//make yoast appear at bottom of edit screens
add_filter('wpseo_metabox_prio', function () {
	return 'low';
});

/**
 * HELPER FUNCTION
 */

if (!function_exists('is_blog')) {
	// is_blog();
	// @link https://gist.github.com/wesbos/1189639
	function is_blog()
	{
		global $post;
		//Post type must be 'post'.
		$post_type = get_post_type($post);
		//Check all blog-related conditional tags, as well as the current post type, 
		//to determine if we're viewing a blog page.
		return (
			(is_home() || is_archive() || is_single())
			&& ($post_type == 'post')
		) ? true : false;
	}
}


// function cogstate_startSession()
// {
// 	if (!session_id()) {
// 		session_start();
// 	}
// }

// add_action('init', 'cogstate_startSession', 1);




/* Custom Post Type Start */
// function create_posttype()
// {
// 	register_post_type(
// 		'post',
// 		array(
// 			'labels' => array(
// 				"name" => __('Post'),
// 				"singular_name" => __('post', 'Ets'),
// 				"menu_name" => __('Post', 'Ets'),
// 				"all_items" => __('All post', 'Ets'),
// 				"add_new" => __('Add New Post', 'Ets'),
// 				"add_new_item" => __('Add New post', 'Ets'),
// 				"edit_item" => __('Edit post', 'Ets'),
// 				"new_item" => __('New post', 'Ets'),
// 				"view_item" => __('View post', 'Ets'),
// 				"search_items" => __('Search post', 'Ets'),
// 				"not_found" => __('No posts Found', 'Ets'),
// 				"not_found_in_trash" => __('No post Found in Trash', 'Ets'),
// 				"parent_item_colon" => __('Parent post', 'Ets'),
// 				"featured_image" => __('Featured Image For post', 'Ets'),
// 				"set_featured_image" => __('Set Featured Image for post', 'Ets'),
// 				"remove_featured_image" => __('Remove festured image from this post', 'Ets'),
// 				"use_featured_image" => __('Use as Featured Image for this post', 'Ets'),
// 				"archives" => __('post Archives', 'Ets'),
// 				"insert_into_item" => __('Insert into post', 'Ets'),
// 				"uploaded_to_this_item" => __('Uploaded to this post', 'Ets'),
// 				"filter_items_list" => __('Filter post List', 'Ets'),
// 				"items_list_navigation" => __('post List Navigation', 'Ets'),
// 				"items_list" => __('posts List', 'Ets'),
// 				"parent_item_colon" => __('Parent post', 'Ets'),
// 			),
// 			'public' => true,
// 			'has_archive' => false,
// 			"rewrite" => array("slug" => 'post'),
// 			"supports" => array("title", "editor", "thumbnail", "page-attributes"),
// 		)
// 	);
// }


// // Hooking up our function to theme setup
// add_action('init', 'create_posttype');

// add_filter('wp_handle_upload_prefilter','ets_validate_image_size');
function ets_validate_image_size($file)
{

	// Calculate the image size in KB
	$image_size = $file['size'] / 1024;
	// File size limit in KB
	$limit = 500;

	$image = getimagesize($file['tmp_name']);
	$maximum = array(
		'width' => '2160',
		'height' => '1280'
	);
	$image_width = $image[0];
	$image_height = $image[1];


	$too_big = "Image file size is too big. Please upload photos no larger than {$maximum['width']} by {$maximum['height']} pixels.";

	$too_large = "Image dimensions are too large. Maximum size is {$maximum['width']} by {$maximum['height']} pixels. Uploaded image is $image_width by $image_height pixels.";


	// Check if it's an image
	$is_image = strpos($file['type'], 'image');

	if (($image_size > $limit) && ($is_image !== false)) {
		//add in the field 'error' of the $file array the message
		$file['error'] = $too_big;
		return $file;
	} elseif ($image_width > $maximum['width'] || $image_height > $maximum['height']) {
		//add in the field 'error' of the $file array the message
		$file['error'] = $too_large;
		return $file;
	} else
		return $file;
}

/**
 * Create a entry for the user test data after the test is completed.
 *
 * @param array $dynamicData        - array of user test data which is dynamic and cal it run time.
 * @param int $isCompleted          - enum value to check the test is completed or not ( 0-No, 1-Yes )
 */
function storeUserTestData(array $dynamicData, $entryId, $isCompleted = 0)
{

	global $wpdb;

	$data = [];
	//$entryId = $_REQUEST['entry_id'];
	$prefix = $wpdb->prefix;
	$userTestTable = $prefix . 'cogstate_user_test_results';
	$row = $wpdb->get_row("SELECT * FROM {$prefix}cogstate_tests WHERE id={$entryId}");

	if ($row) {

		$data['entry_id'] = $entryId;
		$data['yob'] = $row->yob;
		$data['gender'] = $row->gender;
		$data['username'] = $row->username;
		$data['u_identifier'] = $row->u_identifier;
		$data['participant_id'] = $row->entryId;        // zil mam say "Participant Id is the same as the ExternalID"
		$data['external_id'] = $row->entryId;
		$data['test_date'] = date('Y-m-d');
		$data['test_time'] = date('H:i:s');
		$data['is_completed'] = $isCompleted;
		$data['testIdentifier'] = $row->testIdentifier;
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['is_uploaded'] = '0';       // 0-No, 1-Yes

		$finalData = array_merge($data, $dynamicData);

		$getPrevData = $wpdb->get_row("SELECT * FROM {$userTestTable} WHERE entry_id='{$entryId}' AND testIdentifier='{$row->testIdentifier}'");
		if (!$getPrevData) {
			$wpdb->insert($userTestTable, $finalData);
		} else {
			$wpdb->update(
				$userTestTable,
				$finalData,
				array(
					'entry_id' => $entryId,
					'testIdentifier' => $row->testIdentifier
				)
			);
		}
	}
}



// Custome CPT Our Teams
register_post_type( 'Our Teams',
	// CPT Options
	array(
		'labels' => array(
		'name' => __( 'Our Teams' ),
		"singular_name" => __( 'Our Teams', 'ets' ),
		"menu_name" => __( 'Our Teams', 'ets' ),
		"all_items" => __( 'All Our Teams ', 'ets' ),
		"add_new" => __( 'Add Our Teams ', 'ets' ),
		"add_new_item" => __( 'Add Our Teams ', 'ets' ),
		"edit_item" => __( 'Edit Our Teams ', 'ets' ),
		"new_item" => __( 'Our Teams', 'ets' ),
		"view_item" => __( 'View Our Teams ', 'ets' ),
		"search_items" => __( 'Search Our Teams ', 'ets' ),
		"not_found" => __( 'No Our Teams  Found', 'ets' ),
		"not_found_in_trash" => __( 'No Our Teams  found in the Trash', 'ets' ),
		"parent_item_colon" => __( 'Parent Our Teams ', 'ets' ),
		"archives" => __( 'Our Teams ', 'ets' ),
		"filter_items_list" => __( 'Filter Our Teams  List', 'ets' ),
		"items_list_navigation" => __( 'Our Teams  Navigation', 'ets' ),
		"items_list" => __( 'Our Teams ', 'ets' ),
		"parent_item_colon" => __( 'Parent Our Teams ', 'ets' ),
	),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'our-teams'),
		'supports' => array('thumbnail', "title", "editor"),
		'menu_icon' => 'dashicons-buddicons-buddypress-logo',
	)
);


add_shortcode('our-teams', 'wpb_our_teams_shortcode');
function wpb_our_teams_shortcode() { 
     global $post, $page;
	 ob_start();
      query_posts(array(
        'post_type' => 'ourteams'
        
      )); 
	
?>
<section class="py-5 my-5">
     <div class="container py-5">
          <div class="row">
          <?php while (have_posts()) : the_post(); ?>
               <div class="col-md-3 col-sm-6 col-12 ets-teams">
                    <div class="card-teams h-100 shadow-sm">
                         <div class="text-center">
                              <div class="img-hover-zoom img-hover-zoom--colorize">
                              <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                             
                                   <img class="shadow" src="<?php echo $thumb['0'];?>"
                                   alt="Another Image zoom-on-hover effect">
                              </div>
                         </div>
                         <div class="card-body">
                              <div class="clearfix mb-3">
                              </div>
                              <div class="my-2 text-center">
                                   <h3><?php the_title(); ?></h3>
                              </div>
                              <div class="mb-3">
                                   <p class="text-uppercase text-center role-teams"> <?php the_field('designation'); ?> </p>
                              </div>
                              <div class="box-teams">
                                   <div>
                                        <ul class="list-inline">
                                             <li class="list-inline-item"><i class="fab fa-github"></i></li>
                                             <li class="list-inline-item"><i class="fab fa-linkedin-in"></i></li>
                                             <li class="list-inline-item"><i class="fab fa-instagram"></i></li>
                                             <li class="list-inline-item"><i class="fab fa-twitter"></i></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <?php endwhile; ?>


          </div>
     </div>
</section>
<?php
	wp_reset_query();
	return ob_get_clean();
}

add_action( 'wp_enqueue_scripts', 'enqueue_animation_script' );
function enqueue_animation_script() {

	wp_enqueue_style('aos-animation', get_template_directory_uri().'/css/aos.css');
	wp_enqueue_style('technology-icon', get_template_directory_uri().'/css/technology_icon.css');
	wp_enqueue_style('techno-stack', get_template_directory_uri().'/css/techno-stack.css');
// 	wp_enqueue_style('flaticon-icon', get_template_directory_uri().'/css/flaticon.css');
  
	
	// wp_enqueue_script("animation-script");

  
  }

//   technology stack
  function technology_stack_func(){
	echo '
	<div class="technology_stack_main_div">
	<div class="qodef-full-width" id="techno_stack_Section">
	    <div class="qodef-full-width-inner">
		  <div class="vc_row wpb_row vc_row-fluid qodef-section vc_custom_1470996926898 qodef-content-aligment-left qodef-grid-section top-pad">
			
			    <div class="qodef-section-inner-margin clearfix">
				  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
					<div class="vc_column-inner vc_custom_1471259768419">
					    <div class="wpb_wrapper">
						  <div class="technical-stack-section section">
							
							    <div class="technical-stack-inn">
								  <div class="technical-stack-main">
									<div class="technical-main-div">
									    <div class="row">
										  <div class="col-md-12">
											<div class="technical-main-mdl">
											    <div class="technical-main-img"> <span><img src="https://www.easternts.com.au/wp-content/uploads/2020/03/Images_01.png" width="610px" height="552px" alt="technology-stack" title="technology-stack"></span> </div>
											    <div class="technical-tk-ul">
												  <ul>
													<li class="frontend"> <a href="javascript:void(0)">Frontend</a>
													    <ul>
														  <li class="css3">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/css3.png" alt="css3" title="css3"></span> </div>
														  </li>
														  <li class="html5">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/html5.png" alt="html5" title="html5"></span> </div>
														  </li>
														  <li class="javascript">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/javascript.png" alt="javascript"  title="javascript"></span> </div>
														  </li>
														  <li class="angular">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/angularjs.png" alt="angularjs" title="css3"></span> </div>
														  </li>
														  <li class="react">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/react.png" alt="react" title="css3"></span> </div>
														  </li>
														  <li class="less">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/wordpress.png" alt="wordpress" title="css3"></span> </div>
														  </li>
														  <li class="jquery">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/jquery.png" alt="jquery" title="css3"></span> </div>
														  </li>
													    </ul>
													</li>
													<li class="backend"><a href="javascript:void(0)">Backend</a>
													    <ul>
														  <li class="php">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/php.png" alt="php" title="css3"></span> </div>
														  </li>
														  <li class="codeigniter">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/codeigniter.png" alt="codeigniter" title="css3"></span> </div>
														  </li>
														  <li class="drupal">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/drupal.png" alt="drupal" title="css3"></span> </div>
														  </li>
														  <li class="joomla">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/joomla.png" alt="joomla" title="css3"></span> </div>
														  </li>
														  <li class="laravel">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/laravel.png" alt="laravel" title="css3"></span> </div>
														  </li>
														  <li class="magento">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/magento.png" alt="magento" title="css3"></span> </div>
														  </li>
														  <li class="mysql">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/mysql.png" alt="mysql" title="css3"></span> </div>
														  </li>
														  <li class="nodejs">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/nodejs.png" alt="nodejs" title="css3"></span> </div>
														  </li>
														  <li class="rubyonrails">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/rubyonrails.png" alt="rubyonrails" title="css3"></span> </div>
														  </li>
														  <li class="java">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/java.png" alt="java" title="css3"></span> </div>
														  </li>
													    </ul>
													</li>
													<li class="mobile-app"><a href="javascript:void(0)">Mobile App</a>
													    <ul>
														  <li class="android">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/android.png" alt="android" title="css3"></span> </div>
														  </li>
														  <li class="ios">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/ios.png" alt="ios" title="css3"></span> </div>
														  </li>
														  <li class="flutter">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/flutter.png" alt="flutter" title="css3"></span> </div>
														  </li>
														  <li class="ionic">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/vuejs.png" alt="vuejs" title="css3"></span> </div>
														  </li>
														  <li class="kotlin">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/kotlin.png" alt="kotlin" title="css3"></span> </div>
														  </li>
														  <li class="react-native">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/react-native.png" alt="react-native" title="css3"></span> </div>
														  </li>
														  <li class="swift">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/swift.png" alt="swift" title="css3"></span> </div>
														  </li>
														  <li class="xamarin">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/xamarin.png" alt="xamarin" title="css3"></span> </div>
														  </li>
													    </ul>
													</li>
													<li class="ui-ux-design"><a href="javascript:void(0)">UI/UX design</a>
													    <ul>
														  <li class="adobe-xd">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/adobe-xd.png" alt="adobe-xd" title="css3"></span> </div>
														  </li>
														  <li class="illustrator">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/illustrator.png" alt="illustrator" title="css3"></span> </div>
														  </li>
														  <li class="photoshop">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/photoshop.png" alt="photoshop" title="css3"></span> </div>
														  </li>
													    </ul>
													</li>
													<li class="data-science"><a href="javascript:void(0)">Data Science</a>
													    <ul>
														  <li class="python">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/python.png" alt="python" title="css3"></span> </div>
														  </li>
														  <li class="django">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/django.png" alt="django" title="css3"></span> </div>
														  </li>
														  <li class="numpy">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/opencart.png" alt="opencart" title="css3"></span> </div>
														  </li>
														  <li class="panda">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/panda.png" alt="panda" title="css3"></span> </div>
														  </li>
														  <li class="powerBi">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/powerBi.png" alt="powerBi" title="css3"></span> </div>
														  </li>
														  <li class="tensorflow">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/tensorflow.png" alt="tensorflow" title="css3"></span> </div>
														  </li>
														  <li class="tableau">
															<div class="index-list__divider-inn"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/tableau.png" alt="tableau" title="css3"></span> </div>
														  </li>
													    </ul>
													</li>
												  </ul>
											    </div>
											</div>
										  </div>
										  <div class="col-md-3"></div>
									    </div>
									</div>
									<div class="technical-stack-ul">
									    <ul>
										  <li class="adobe-xd">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/adobe-xd.png" alt="adobe-xd" title="css3"></span> </div>
										  </li>
										  <li class="android">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/android.png" alt="android" title="css3"></span> </div>
										  </li>
										  <li class="angularjs">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/angularjs.png" alt="angularjs" title="css3"></span> </div>
										  </li>
										  <li class="aws">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/aws.png" alt="aws" title="css3"></span> </div>
										  </li>
										  <li class="codeigniter">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/codeigniter.png" alt="codeigniter" title="css3"></span> </div>
										  </li>
										  <li class="css3">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/css3.png" alt="css3" title="css3"></span> </div>
										  </li>
										  <li class="django">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/django.png" alt="django" title="css3"></span> </div>
										  </li>
										  <li class="drupal">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/drupal.png" alt="drupal" title="css3"></span> </div>
										  </li>
										  <li class="flutter">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/flutter.png" alt="flutter" title="css3"></span> </div>
										  </li>
										  <li class="html5">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/html5.png" alt="html5" title="css3"></span> </div>
										  </li>
										  <li class="illustrator">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/illustrator.png" alt="illustrator" title="css3"></span> </div>
										  </li>
										  <li class="ionic">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/vuejs.png" alt="vuejs" title="css3"></span> </div>
										  </li>
										  <li class="ios">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/ios.png" alt="ios" title="css3"></span> </div>
										  </li>
										  <li class="java">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/java.png" alt="java" title="css3"></span> </div>
										  </li>
										  <li class="javascript">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/javascript.png" alt="javascript" title="css3"></span> </div>
										  </li>
										  <li class="joomla">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/joomla.png" alt="joomla" title="css3"></span> </div>
										  </li>
										  <li class="jquery">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/jquery.png" alt="jquery" title="css3"></span> </div>
										  </li>
										  <li class="keras">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/shopify.png" alt="shopify" title="css3"></span> </div>
										  </li>
										  <li class="kotlin">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/kotlin.png" alt="kotlin" title="css3"></span> </div>
										  </li>
										  <li class="laravel">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/laravel.png" alt="laravel" title="css3"></span> </div>
										  </li>
										  <li class="less">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/wordpress.png" alt="wordpress" title="css3"></span> </div>
										  </li>
										  <li class="magento">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/magento.png" alt="magento" title="css3"></span> </div>
										  </li>
										  <li class="mongodb">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.infowindtech.com/wp-content/themes/infowind/company-logo/other/mongodb.png" alt="mongodb" title="css3"></span> </div>
										  </li>
										  <li class="mysql">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/mysql.png" alt="mysql" title="css3"></span> </div>
										  </li>
										  <li class="nodejs">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/nodejs.png" alt="nodejs" title="css3"></span> </div>
										  </li>
										  <li class="numpy">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/opencart.png" alt="opencart" title="css3"></span> </div>
										  </li>
										  <li class="panda">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/panda.png" alt="panda" title="css3"></span> </div>
										  </li>
										  <li class="photoshop">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/photoshop.png" alt="photoshop" title="css3"></span> </div>
										  </li>
										  <li class="php">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/php.png" alt="php" title="css3"></span> </div>
										  </li>
										  <li class="powerBi">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/powerBi.png" alt="powerBi" title="css3"></span> </div>
										  </li>
										  <li class="python">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/python.png" alt="python" title="css3"></span> </div>
										  </li>
										  <li class="react">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/react.png" alt="react" title="css3"></span> </div>
										  </li>
										  <li class="react-native">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/react-native.png" alt="react-native" title="css3"></span> </div>
										  </li>
										  <li class="rubyonrails">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/rubyonrails.png" alt="rubyonrails" title="css3"></span> </div>
										  </li>
										  <li class="swift">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/swift.png" alt="swift" title="css3"></span> </div>
										  </li>
										  <li class="tensorflow">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/tensorflow.png" alt="tensorflow" title="css3"></span> </div>
										  </li>
										  <li class="xamarin">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/xamarin.png" alt="xamarin" title="css3"></span> </div>
										  </li>
										  <li class="tableau">
											<div class="index-list__divider-inn aos-init aos-animate" data-aos="zoom-in" data-aos-duration="500"> <span><img src="https://www.easternts.com.au/wp-content/uploads/home_img/icons/tableau.png" alt="tableau" title="css3"></span> </div>
										  </li>
									    </ul>
									</div>
								  </div>
							    </div>
							</div>
						  </div>
					    </div>
					</div>
				  </div>
			    </div>
			</div>
		  </div>
	<div>';
  }
  add_shortcode( 'technology_stack', 'technology_stack_func' );


add_shortcode( 'email_template_header', 'email_template_header_function' );
function email_template_header_function($atts) {

	ob_start(); ?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
			<title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
		</head>
		<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
			<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>" style="background-color:#f7f7f7;margin:0;width:100%;padding:40px 0 0;-webkit-text-size-adjust:none;">
				<table border="0" cellpadding="0" cellspacing="0" height="100%" .="100%" style="margin: 0 auto;">
					<tr>
						<td align="center" valign="top">
							<div id="template_header_image" style="background-color: #fff;margin: 0 auto;width: 700px;padding: 20px 0;border-radius: 13px 13px 0 0;border-bottom: 2px solid #f57f20;">
								<?php $image = site_url()."/wp-content/uploads/2023/01/Easternts.gif";  ?>
								<?php
									echo '<p style="margin-top:0; margin-bottom:0;"><img src="' . esc_url( $image  ) .' "' . get_bloginfo( 'name', 'display' ) . '" /></p>';
								?>
							</div>
							<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="background-color:#fff;box-shadow:0 1px 4px rgba(0,0,0,.1);border-radius:3px; font-size:1.24em;">
								<tr>
									<td align="center" valign="top">
										<!-- Header -->
										<div id="template_header_ets" style="background-color:#fff;margin:0 auto;width:700px;padding:0; background-color: #fff;">
											<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header" >
												<tr>
													<td id="header_wrapper" align="center" >
														<h1 style="font-family: Helvetica Neue,Helvetica,Roboto,Arial,sans-serif; font-size: 2em; font-weight: 300; line-height: 150%; margin: 0; color: #000000; text-align: center;margin-top: 41px;"><?php echo $email_subject; ?></h1>
													</td>
												</tr>
											</table>
										</div>
										<!-- End Header -->
									</td>
								</tr>
								<tr>
									<td align="center" valign="top">
										<!-- Body -->
										<table border="0" cellpadding="0" cellspacing="0" width="700" id="template_body">
											<tr>
												<td valign="top" id="body_content" >
													<!-- Content -->
													<table border="0" cellpadding="20" cellspacing="0" width="100%">
														<tr>
															<td valign="top">
																<div id="body_content_inner"><?php
	return ob_get_clean();

}

/* Email Templates - Exclude Woocommerce emails */
add_shortcode( 'email_template_footer', 'email_template_footer_function' );
function email_template_footer_function() {

	ob_start(); ?>
																</div>
															</td>
														</tr>
													</table>
													<!-- End Content -->
												</td>
											</tr>
										</table>
										<!-- End Body -->
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center" valign="top" style="width: 100%;">
							<!-- Footer -->
							<table border="0" cellpadding="10" cellspacing="0" width="700" id="template_footer" style="background-color: #1a2e59; width:100%; color: #FFF; margin-bottom: 40px; border-radius: 0 0 12px 12px; min-width: 500px;">
								<tr>
									<td valign="top">
										<table border="0" align="center" cellpadding="10" cellspacing="0" width="100%" style="text-align: center;">
											<tr align="center">
												<td valign="middle" id="credit" align="center" style="padding-bottom: 8px; display: block; text-align: center; ">
													<a target="_blank" href="<?php echo site_url(); ?>" style="font-weight:400;text-decoration:blink;color:#fff;font-size: 20px; text-align: center; ">Eastern Techno Soluations </a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<!-- End Footer -->
						</td>
					</tr>
				</table>
			</div>
		</body>
	</html><?php
	return ob_get_clean();

}

/* Contact Form 7 Shortcode enable in Body Tag. */
add_filter( 'wpcf7_form_elements', 'do_shortcode' );
function header_special_mail_tag( $output, $name, $html ) {
	if ( 'email_template_header' == $name )
		$output = do_shortcode( "[$name]" );

	return $output;
}
add_filter( 'wpcf7_special_mail_tags', 'header_special_mail_tag', 10, 3 );

function footer_special_mail_tag( $output, $name, $html ) {
	if ( 'email_template_footer' == $name )
		$output = do_shortcode( "[$name]" );

	return $output;
}
add_filter( 'wpcf7_special_mail_tags', 'footer_special_mail_tag', 10, 3 );


add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'smtp.gmail.com';
    $phpmailer->Port       = '587';
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Username   = 'noreply.easternts06@gmail.com';
    $phpmailer->Password   = 'nacpgphauekshajz';
    $phpmailer->From       = 'noreply.easternts06@gmail.com';
    $phpmailer->FromName   = 'Edventure Infotech ';
//     $phpmailer->addReplyTo('noreply.easternts06@gmail.com', 'Information');
}

//add_filter( 'wp_mail_content_type','set_my_mail_content_type' );
function set_my_mail_content_type() {
    return "text/html";
}
  