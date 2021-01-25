<?php 
/*
Template Name: Services
*/


get_header(); ?>


<section id="inner_cover">
	<div class="container">
		<h2>OUR BEST SERVICES</h2>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
		    <li class="breadcrumb-item"><a href="<?php the_permalink(); ?>">Services</a></li>
		  </ol>
		</nav>
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
				));

				while ($CPTservice->have_posts()):
					$CPTservice->the_post(); ?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<a href="#" class="single_service wow slideInLeft" data-wow-duration=".6s" data-wow-delay=".3s">
							<div class="service_img">
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="" class="img-responsive">
							</div>
							<div class="service_details">
								<h2><?php echo get_the_title();?></h2>
								<p><?php echo get_the_content();?></p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

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
				<form>
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
<?php include 'footer.php'; ?>