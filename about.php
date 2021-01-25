<?php 
/*
Template Name: About
*/

get_header(); ?>


<section id="inner_cover">
	<div class="container">
		<h2>ABOUT US</h2>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
		    <li class="breadcrumb-item"><a href="<?php the_permalink(); ?>">About</a></li>
		  </ol>
		</nav>
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