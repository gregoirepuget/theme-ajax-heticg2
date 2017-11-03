<article class="column small-12 medium-4">
  <?php
    if (has_post_thumbnail()) {
      echo '<div class="thumbnail">';
      the_post_thumbnail( $size = 'post-thumbnail');
      echo '</div>';
    }
  ?>
  <h2><?php the_title(); ?></h2>
  <div><?php the_excerpt(); ?></div>
  <a class="button" href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php _e('Read article', "theme-hetic"); ?></a>
</article>
