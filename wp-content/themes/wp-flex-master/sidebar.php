<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'wpflex sidebar' ) ) : ?>
  <h3><?php _e('Default Widgets','wpflex');?></h3>

  <article>
    <?php get_search_form(); ?>
  </article>

  <article>
    <h3><?php _e( 'Meta','wpflex' );?></h3>
    <ul>
      <?php wp_register(); ?>
        <li><?php wp_login_form(); ?></li>
        <li><a href="http://wordpress.org" title="Powered by WordPress, state-of-the-art semantic personal publishing platform." rel="external">WordPress.org</a></li>
      <?php wp_meta(); ?>
    </ul>
  </article>

  <article>
    <h3><?php _e( 'Categories','wpflex' );?></h3>
    <ul>
      <?php wp_list_categories('show_count=1&title_li='); ?>
    </ul>
  </article>

  <article>
    <?php wp_list_bookmarks(); ?>
  </article>

  <article>
    <h3><?php _e( 'Tag Cloud','wpflex' );?></h3>
    <?php wp_tag_cloud(); ?>
  </article>
<?php endif; ?>
