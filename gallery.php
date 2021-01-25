<?php 
/*
Template Name: Gallery
*/

get_header(); ?>


<section id="inner_cover">
	<div class="container">
		<h2>OUR WORK PORTFOLIO</h2>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#">Home</a></li>
		    <li class="breadcrumb-item"><a href="#">Gallery</a></li>
		  </ol>
		</nav>
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
<?php get_footer(); ?>