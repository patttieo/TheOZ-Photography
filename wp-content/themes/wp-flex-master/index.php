<?php get_header(); ?>
  <div class="row">
    <div class="container">   
      <div class="col-sm-12 col-md-8">
        <main id="content" class="clearfix" role="main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                  <?php if ( has_post_thumbnail() ) : ?>
                    <figure>
                      <?php the_post_thumbnail(); ?>
                    </figure>
                  <?php endif; ?>

                  <h1 class="entry-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                  </h1>

                  <?php get_template_part( 'inc/meta' ); ?>
                </header>

                <div class="entry-content">
                  <?php the_content(); ?>
                </div>

                <?php get_template_part( 'inc/entry-footer' ); ?>
              </article>
            <?php endwhile; ?>

            <?php else : ?>
            <?php get_template_part( 'inc/error-msg' ); ?>
            <?php endif; ?>

            <?php get_template_part( 'inc/pagination-posts' ); ?>

        </main>
      </div>
      <div class="col-md-4 hidden-sm hidden-xs">
        <?php get_template_part( 'inc/widget-sidebar' ); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>