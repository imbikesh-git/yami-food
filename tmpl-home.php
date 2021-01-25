<?php 
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="clearfix"></div>

<section id="banner">
	<div class="owl-carousel owl-theme">
		<?php
		$HomeSlider = new WP_Query(array(
			'post_type' => 'slider',
		));
		while ($HomeSlider->have_posts()):
			$HomeSlider->the_post();
			?>
			<div class="item">
				<div class="single_banner" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>);">
					<div class="content">
						<h2 class="wow bounce"><?php echo get_the_title();?></span></h2>
						<p class="wow slideInLeft"><?php echo get_the_content();?></p>
						<div class="banner_btn wow slideInRight">
							<a href="<?php the_permalink();?>">Our Service</a>
							<a href="<?php the_permalink();?>">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>	
	</div>
</section>

<div class="clearfix"></div>


<section id="about">
	<div class="container">
		<?php
		$HomePost = new WP_Query(array(
			'p' => 136,
		));
		while ($HomePost->have_posts()):
			$HomePost->the_post();
			$fname = get_post_meta(get_the_ID(),'fname',true);
			?>
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<div class="about_content">
						<h2 class="wow slideInDown" data-wow-duration=".8s" data-wow-delay=".5s"><?php echo get_the_title();?></h2>
						<h5><?php echo $fname; ?></h5>
						<hr>
						<p class="wow slideInDown" data-wow-duration=".8s" data-wow-delay=""><?php echo get_the_content();?></p>
						<hr>
						<a href="<?php the_permalink(); ?>">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="about_img wow slideInRight">
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="" class="img-responsive">
					</div>
				</div>
			<?php endwhile; ?> 
		</div>
	</div>
</section>

<div class="clearfix"></div>

<section id="choose">
	<div class="container">
		<div class="row">
			<?php
			$CatPost = new WP_Query(array(
				'cat' => 5,
			)); ?>

			<div class="title">
				<h2 style="color: white;"><?php echo get_cat_name(5);?></h2>
				<p><?php echo category_description(5); ?></p>
			</div>

			<?php
			while ($CatPost->have_posts()):
				$CatPost->the_post();
				?>
				<div class="col-lg-3 col-ms-3 col-sm-6 col-xs-12">
					<div class="single_box wow slideInUp" data-wow-duration=".5s" data-wow-delay=".3s">
						<div class="img_box">
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="" class="img-responsive">
						</div>
						<div class="content_box">
							<h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></h4></a>
							<p><?php echo get_the_content();?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?> 
		</div>
	</div>
</section>





<div class="clearfix"></div>



<section id="service">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>OUR BEST SERVICES</h2>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
			</div>

			<div class="service_content">
				<?php

				$CPTservice = new WP_Query(array(
					'post_type' => 'service',
					'orderby' => 'featured-checkbox',
					'order' => 'ASC',
					'meta_query' => array(
						array(
							'key' => 'featured-checkbox',
							'value' => 'yes'
						)
					),
					'relation' => 'OR',
					'tax_query' => array(
						
						array(

							'taxonomy' => 'service-category',
							'field'    => 'id',
							'terms'    => array(9),
						),
					),

				));

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



<div class="clearfix"></div>

<section id="gallery">
	<div class="container">
		<div class="row gallery">
			<div class="title">
				<h2>OUR WORK</h2>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
			</div>

			<?php
			$CPTgallery = new WP_Query(array(
				'post_type' => 'gallery',
			));

			while ($CPTgallery->have_posts()):
				$CPTgallery->the_post(); ?>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gattor wow slideInUp" data-wow-duration=".5s" data-wow-delay=".3s">
					<a href="images/gallery2.jpg" target="_blank" >
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="" class="img-responsive">
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>



<div class="clearfix"></div>

<section id="customer">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>CUSTOMER REVIEWS</h2>
				<p style="color: black;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
			</div>

			<div class="owl-carousel owl-theme">
				<?php
				$args = array(
					'post_type' => 'review',
					'tax_query' => array(
						'relation' => 'OR',
						array(
							'taxonomy' => 'review-category',
							'field'    => 'id',
							'terms'    => array(8),
						),
					),
				);
				$query = new WP_Query( $args );

				while ($query->have_posts()): 
					$query->the_post(); ?>


					<div class="item">
						<div class="single_customer">
							<div class="customer_content">
								<p><?php echo wp_trim_words(get_the_content(),25);?></p>
							</div>
							<div class="user_id">
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="">
								<h4><?php the_excerpt(); ?></h4>
							</div>
						</div>
					</div>
				<?php endwhile; ?>				
			</div>
		</div>
	</div>
</section>



<div class="clearfix"></div>

<?php

function filterName($field){
    // Sanitize user name
	$field = filter_var(trim($field), FILTER_SANITIZE_STRING);
	
    // Validate user name
	if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
		return $field;
	} else{
		return FALSE;
	}
}    
function filterEmail($field){
    // Sanitize e-mail address
	$field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
	
    // Validate e-mail address
	if(filter_var($field, FILTER_VALIDATE_EMAIL)){
		return $field;
	} else{
		return FALSE;
	}
}
function filterString($field){
    // Sanitize string
	$field = filter_var(trim($field), FILTER_SANITIZE_STRING);
	if(!empty($field)){
		return $field;
	} else{
		return FALSE;
	}
}

// Define variables and initialize with empty values
$nameErr = $emailErr = $commentErr = "";
$name = $email = $subject = $message = $attachments="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
    // Validate user name
	if(empty($_POST["name"])){
		$nameErr = "Please enter your name.";
	} else{
		$name = filterName($_POST["name"]);
		if($name == FALSE){
			$nameErr = "Please enter a valid name.";
		}
	}
	
    // Validate email address
	if(empty($_POST["email"])){
		$emailErr = "Please enter your email address.";     
	} else{
		$email = filterEmail($_POST["email"]);
		if($email == FALSE){
			$emailErr = "Please enter a valid email address.";
		}
	}
	
    // Validate user name
	if(empty($_POST["subject"])){
		$subjectErr = "Please enter your subject.";
	} else{
		$subject = filterSubject($_POST["subject"]);
		if($subject == FALSE){
			$subjectErr = "Please enter a valid subject.";
		}
	}

    // Validate user comment
	if(empty($_POST["comment"])){
		$commentErr = "Please enter your comment.";     
	} else{
		$comment = filterString($_POST["comment"]);
		if($comment == FALSE){
			$commentErr = "Please enter a valid comment.";
		}
	}
	
    // Check input errors before sending email
	if(empty($nameErr) && empty($emailErr) && empty($commentErr)){
        // Recipient email address
		$to = 'bikesh@responsive-pixel.com';
		
        // Create email headers
		$headers = 'From: '. $email . "\r\n" .
		'Reply-To: '. $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
        // Sending email
		if(wp_mail( $to, $subject, $message, $headers, $attachments )){
			echo '<p class="success">Your message has been sent successfully!</p>';
		} else{
			echo '<p class="error">Unable to send email. Please try again!</p>';
		}
	}
}
?>
<section id="subscribe">
	<div class="container">
		<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
			<div class="subscribe_content">
				<h2>Do you have any questions? </h2>
				<h3>Feel free to contact us!</h3>
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
			<div class="subscribe_form">
				<form method="post">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="form-group">
							<textarea id="message" name="message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="form-group">
							<button type="SUBMIT" id="submit" name="submit">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>
<?php get_footer(); ?>