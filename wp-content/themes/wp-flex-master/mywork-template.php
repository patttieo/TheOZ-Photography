<?php
/*
 * Page My Work Template
 * Template Name: work-template
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <main id="content" class="clearfix container work-wrapper" role="main">
    <header>
      <h1><?php the_title(); ?></h1>
    </header>

    <?php 

    $images = get_field('the_gallery');

    if( $images ): ?>
        <div class="row">
            <?php foreach( $images as $image ): ?>
               <div class="col-md-4 col-xs-12">
                    <a target="_blank" href="<?php echo $image['url']; ?>">
                         <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <p><?php echo $image['caption']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php
      wp_link_pages( array( 
        'before' => '<div>' . __('Pages &rarr;', 'wpflex'),
        'after'  => '</div>'
      ));
    ?>

    <?php get_template_part( 'inc/edit-post-link' ); ?>
  </main>
<?php endwhile; ?>


<?php else : ?>
<p><?php  _e( 'sorry, this page does not exist', 'wpflex' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
