<?php 
/*
Template Name: Contact
*/
get_header();
 ?>


<section id="inner_cover">
	<div class="container">
		<h2>CONTACT US</h2>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
		    <li class="breadcrumb-item"><a href="<?php the_permalink(); ?>">Contact</a></li>
		  </ol>
		</nav>
	</div>
</section>

<div class="clearfix"></div>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="contact_box">
					<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					<h2>Our Address</h2>
					<p>124 New Line, London UK,Nemo enim ipsam voluptatem</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="contact_box">
					<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<h2>Our Emails</h2>
					<p>hello@psdfreebies.com</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="contact_box">
					<span><i class="fa fa-phone" aria-hidden="true"></i></span>
					<h2>Our Phones</h2>
					<p>+44 00 00 1234 <br>+44 00 00 1234</p>
				</div>
			</div>
		</div>
		<div class="contact_form">
			<form action="" method="">
			 <div class="row">
			 	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			 		 <div class="form-group">
					    <label for="name">YOUR NAME</label>
					    <input type="text" class="form-control" id="name" required="">
					  </div>
			 	</div>
			 	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			 		<div class="form-group">
					    <label for="email">YOUR EMAIL</label>
					    <input type="email" class="form-control" id="email" required="">
					  </div>
			 	</div>
			 	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			 		  <div class="form-group">
					    <label for="phone">YOUR PHONE NO</label>
					    <input type="phone" class="form-control" id="phone" required="">
					  </div>
			 	</div>
			 	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			 		  <div class="form-group">
					    <label for="phone">YOUR SUBJECT</label>
					    <input type="text" class="form-control" id="subject" required="">
					  </div>
			 	</div>
			 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			 		  <div class="form-group">
					    <label for="message">YOUR MESSAGE</label>
					    <textarea class="form-control" id="message"></textarea>
					  </div>
			 	</div>
			 </div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
				 	<div class="form-group">
						<button type="submit" class="contact_submit">SUBMIT NOW</button>
					</div>
			    </div>
			</form>
		</div>
	</div>
</section>

<div class="clearfix"></div>
<?php get_footer(); ?>