<?php
/*
Template Name: Splash Screen
*/
?>
<!DOCTYPE html>
<html>
  <head lang="en">
    <title><?php wp_title();?></title>
    <?php get_template_part('component/meta'); ?>
    <?php wp_head(); ?>
    <?php get_template_part('component/head'); ?>
  </head>
  <body class="splash">
    <header class="header--splash">
      <h1 class="header__title--splash page"><a href="/home"><span>Michael</span> <span>Bergmann</span></a></h1>
      <p class="splash__cta page">
        <a href="/home">Welcome
        <span>
          <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve">
            <g>
              <path d="M484.14,226.886L306.46,49.202c-5.072-5.072-11.832-7.856-19.04-7.856c-7.216,0-13.972,2.788-19.044,7.856l-16.132,16.136
                c-5.068,5.064-7.86,11.828-7.86,19.04c0,7.208,2.792,14.2,7.86,19.264L355.9,207.526H26.58C11.732,207.526,0,219.15,0,234.002
                v22.812c0,14.852,11.732,27.648,26.58,27.648h330.496L252.248,388.926c-5.068,5.072-7.86,11.652-7.86,18.864
                c0,7.204,2.792,13.88,7.86,18.948l16.132,16.084c5.072,5.072,11.828,7.836,19.044,7.836c7.208,0,13.968-2.8,19.04-7.872
                l177.68-177.68c5.084-5.088,7.88-11.88,7.86-19.1C492.02,238.762,489.228,231.966,484.14,226.886z"/>
            </g>
          </svg>
        </span>
      </a>
    </p>
    </header>
    <div class="content" id="content">
      <main class="splash__content">
        <?php if( have_rows('quote') ): ?>
        <div class="splash__carousel">
          <?php while( have_rows('quote') ): the_row();
          $image = get_sub_field('image');
          $quote = get_sub_field('quote');
          $source = get_sub_field('source');
          ?>
          <div class="splash__slide" style="background-image: url('<?php echo $image['url']; ?>'); background-position:<?php the_sub_field('image_position_y') ?>">
              <p class="splash__quote page"><?php echo $quote; ?> <?php if ($source): ?><span class="splash__source">—<?php echo $source; ?></span><?php endif; ?></p>
          </div>
          <?php endwhile; ?>
        </div>
        <!-- /.splash__carousel -->
        <?php endif; ?>
      </main>
    </div>
  </body>

<?php get_footer(); ?>
