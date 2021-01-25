<footer>
	<div class="container">
		<div class="row">
			
			<?php
			for($i=0; $i<=4; $i++){
				?>
				
				<?php if(is_active_sidebar( 'footer-'.$i )){
					echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
					dynamic_sidebar('footer-'.$i);
					echo '</div>';
				}?>
				
			<?php }?>

		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script>
	$(document).ready(function() {
		$('.gallery').magnificPopup({
			delegate: 'a', 
			type: 'image'
		});
	});
</script>
</body>
</html>
