<?php
//this is for template archive
?>
<div class="post-item">

     <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2><br>

     <div class="metabox">
          <p>Posted by <?php the_author_posts_link(); ?> on  <?php the_time('Y/m/d g:i:s A'); ?> in <?php echo get_the_category_list(','); ?></p>

    </div>

    <div class="generic-content">
          <?php the_excerpt(); ?><br>
          <p><a href="<?php the_permalink(); ?>"> Continue reading</a></p><br><br>

    </div>
</div>