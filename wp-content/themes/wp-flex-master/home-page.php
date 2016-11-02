<?php
/*
 * Home Page
 * Template Name: home-page
 */
?>

<?php get_header(); ?>
<div class="home-wrapper">
  <div class="intro-wrapper">
    <div class="banner-content">
      <h1>Welcome to my site.</h1>
      <div class="intro-button">Enter</div>
    </div>
  </div>

  <div class="home-container">
    <div class="home-content">
      <div class="container">



        <?php 

          if( have_rows('home-image-gallery') ) {
            while( have_rows('home-image-gallery') ) {
              the_row();
        ?>

        <div class="row">
          <?php
              $imagesArray = get_sub_field_object('images');
              $images = $imagesArray['value'];
              $score = 0;
              $i = 1;

              do {
                $image = current($images);

                 if ( $image['size'] == 3 ) {
                    $containerDivClass = "col-sm-12";
                 }
                 elseif ( $image['size'] == 2 ) {
                    $containerDivClass = "col-sm-12 col-md-8";
                 }
                 else {
                    $containerDivClass = "col-sm-12 col-md-4";
                 }

                 $imgAlt = "Text";

                $position = (int)$image['start-column'];
                if ($position == $i) {
                  ?>

                  <div class="<?php echo $containerDivClass; ?>">
                    <img class="ha-waypoint port-image" data-animate-down="image-active" src="<?php echo $image['image']; ?>" alt="<?php echo $imgAlt; ?>">
                  </div>

                  <?php
                  $size = $image['size'];
                  next($images);
                }
                else {
                  ?>

                    <div class="hidden-sm hidden-xs col-md-4">
                      <div class="spacer"></div>
                    </div>

                  <?php 
                  $size = 1;
                }

                $score = $score + $size;
                $i++;
              }
              while ($score < 3);
          ?>

        </div>

        <?php 
            } // Closing for foreach
          } // Closing for if
        ?>

      </div>
    </div>  
  </div>
</div>
<?php get_footer(); ?>
