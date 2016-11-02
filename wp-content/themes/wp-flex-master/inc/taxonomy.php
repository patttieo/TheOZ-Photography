<?php
  $posttags = get_the_tags();
  $postcats = get_the_category();
?>
<?php if ($posttags || $postcats) : ?>
<ul class="taxonomy">
  <?php if ($posttags) : ?>
  <li><?php _e( 'Tagged:', 'wpflex' ); ?>
    <ul class="taxonomy__tagls taxonomy__ls">
      <?php the_tags( '</li><li class="taxonomy__tags">' ); ?>
    </ul>
  </li>
  <?php endif ?>

  <?php if ($postcats) : ?>
  <li><?php _e( 'Filed under:' , 'wpflex' ); ?>
    <ul class="taxonomy__catls taxonomy__ls">
      <li class="taxonomy__cats"><?php the_category( ', ' ) ?></li>
    </ul>
  </li>
  <?php endif ?>
</ul>
<?php endif ?>