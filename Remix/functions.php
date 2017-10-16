<?php 
$opt_name="remix_options";
require_once('codestar/cs-framework.php');
require_once('inc/custom-post.php');
require_once('inc/widget.php');
require_once('inc/custom-comment.php');
require_once('inc/post-like.php');

add_theme_support( 'post-thumbnails' );
add_image_size('small_image',80,55,true);
	
	
	function theme_style_file(){
		
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css',array(),'1.1','all');
		wp_enqueue_style( 'icofonts', get_template_directory_uri() . '/assets/icofont/css/icofont.css',array(),'1.1','all');
		wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css',array(),'1.1','all');
		wp_enqueue_style( 'fs.boxer', get_template_directory_uri() . '/assets/css/jquery.fs.boxer.min.css',array(),'1.1','all');
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',array(),'1.1','all');
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css',array(),'1.1','all');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css',array(),'1.1','all');
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css',array(),'1.1','all');
		wp_enqueue_style( 'simple-likes', get_template_directory_uri() . '/assets/css/simple-likes-public.css',array(),'1.1','all');
		
		
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'OnePagenNav', get_template_directory_uri() . '/assets/js/OnePagenNav.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'gmap3-min', get_template_directory_uri() . '/assets/js/gmap3.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'functions', get_template_directory_uri() . '/assets/js/functions.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/jquery.viewport.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'jquery-easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'simple-likes', get_template_directory_uri() . '/assets/js/simple-likes-public.js', array ( 'jquery' ), 1.1, true);
		
	}

add_action('wp_enqueue_scripts','theme_style_file');

function load_js(){ ?>
	
	<script type="text/javascript">
		    jQuery('#main-nav').onePageNav({
                 currentClass: 'active',
                 changeHash: false,
                 scrollSpeed: 1200,
                 scrollOffset: 80,
				 filter: ':not(.sub-menu a, .not-home)'
            });

			jQuery('.carousel').carousel({
		        interval: 8000
		    })	

			/*  - wow animation wow.js 
		    ---------------------------------------------------*/
		    var wow = new WOW (
		    {
		          boxClass:     'wow',      // animated element css class (default is wow)
		          animateClass: 'animated', // animation css class (default is animated)
		          offset:       0,          // distance to the element when triggering the animation (default is 0)
		          mobile:       false       // trigger animations on mobile devices (true is default)
		      }
		    );
		    wow.init();

		    /*  - wow animation wow.js End 
		    ---------------------------------------------------*/

		</script>
	<?php
}
add_action('wp_footer','load_js',100);
function footer_widgets() {
    register_sidebar( array(
        'name' => __( 'Footer Left Sidebar', 'remix' ),
        'id' => 'footer_left_sidebar',
        'description' => __( 'Add Your Left Footer Widget here', 'remix' ),
        'before_widget' => '<div class="col-md-4"><div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h2 class="rounded"><i class="fa fa-phone"></i>&nbsp;',
		'after_title'   => '</h2><div class="contact-info">',
    ) );  
	register_sidebar( array(
        'name' => __( 'Footer Middle Sidebar', 'remix' ),
        'id' => 'footer_middle_sidebar',
        'description' => __( 'Add Your Middle Footer Widget here', 'remix' ),
        'before_widget' => '<div class="col-md-4"><div class="widget"><div class="tag-clouds">',
		'after_widget'  => '</div></div></div></div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2><div class="tag-list">',
    ) );   
}
add_action( 'widgets_init', 'footer_widgets' );



?>