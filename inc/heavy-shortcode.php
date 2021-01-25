<?php

function heavy_shortcode_part1(){

	return "</br>This is just for test shortcode";
}
add_shortcode('heavy', 'heavy_shortcode_part1');

add_shortcode("owt-tag", "wpl_owt_shortcode_part4");

function wpl_owt_shortcode_part4($atts, $content = "") {

    extract(shortcode_atts(array(
    'title' => '',
	 'url' => '',     
    ), $atts));	
    return '<a href="' . esc_url(esc_attr($url)) . '" title="' . esc_attr($atts['title']) . '">' . $content . '</a>';
}

function heavy_shortcode_part2($atts, $content = ""){
// set up default parameters
    extract(shortcode_atts(array(
     'title' => '',
     'desc' => '',
     'featured' => false
    ), $atts));	

    ob_start();
    echo 'content='.$content;
    ?>
	<section id="service">
		<div class="container">

			<div class="row">
				<div class="title">
					<h2><?php echo $title;?></h2>
					<p><?php echo $desc;?></p>
				</div>

				<div class="service_content">
					<?php
					$args = array(
						'post_type' => 'service',
						'orderby' => 'featured-checkbox',
						'order' => 'ASC',
						'relation' => 'OR',

					);
					if($featured == true){
						$args['meta_query'] = array(
							array(
								'key' => 'featured-checkbox',
								'value' => 'yes'
							)
						);
					}
					$CPTservice = new WP_Query($args);

					while ($CPTservice->have_posts()):
						$CPTservice->the_post(); ?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<a href="#" class="single_service wow slideInLeft" data-wow-duration=".6s" data-wow-delay=".3s">
								<div class="service_img">
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="" class="img-responsive">
								</div>
								<div class="service_details">
									<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></h2></a>
									<p><?php echo get_the_content();?></p>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
    <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;

}

add_shortcode('service-list', 'heavy_shortcode_part2');

