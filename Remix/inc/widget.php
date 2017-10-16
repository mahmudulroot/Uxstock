<?php

function footer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Footer Sidebar', 'theme-slug' ),
        'id' => 'footer_widget',
        'description' => __( 'This is our Footer Widget', 'theme-slug' ),
        'before_widget' => '<div class="col-md-4"><div class="popular-post"><div class="widget">',
		'after_widget'  => '</div></div></div></div></div></div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2><div class="latest-post"><div class="inner-item clearfix"><div class="post-img">',
    ) );
}
add_action( 'widgets_init', 'footer_sidebar' );

class latest_post extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct(
			
			'latest_footer_post',
			'Recent Post'

		);
	}

	function widget( $args, $instance ) {
		// Widget output
		echo $args['before_widget'];
		 ?>
			<h2 class="rounded">Latest Posts</h2>

				<div class="latest-post">
				
					<?php while(have_posts()) : the_post();?>
					
					<div class="inner-item clearfix">
						<div class="post-img">
							<?php 
								
								if(has_post_thumbnail()){
									
									the_post_thumbnail('small_image');
								}
							?>
						</div><!-- /.auther-img -->
							
						<div class="post-details">
							<p class="message">
								<a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_content(),10);?></a>
							</p>
							<p class="entry-meta">
								<a href="#">2 Comments</a> <span>at</span>
								<a href="#"><?php the_time('F j,Y');?></a>
							</p>
						</div><!-- /.post-details -->
					</div><!-- /.inner-item -->
					
					<?php endwhile;?>
				
				</div><!-- /.latest-post -->
		<?php
		echo $args['after_widget'];
		
	}


	
}

function footer_latest_post() {
	register_widget( 'latest_post' );
}

add_action( 'widgets_init', 'footer_latest_post' );