<?php get_header(); ?>


<div class="container">
	<?php while (have_posts()): the_post(); ?>

		<h1> <?php the_title(); ?> </h1><br><br>
		<div class="content">
			<p><?php the_content(); ?></p>
		</div>
		
		<?php the_post_thumbnail(); ?>

	<?php endwhile; ?>
</div>


<?php get_footer(); ?>