<?php get_header(); ?>

<div class="container container--narrow page-section">

	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			get_template_part( 'template-parts/search', 'archive' );
		} 

		echo paginate_links(); ?>

		

		<?php 
	}else { ?>

		<h1>Sorry there is no search results for <?php the_search_query(); ?></h1>
	<?php } 
		?>
</div>

<?php get_footer(); ?>