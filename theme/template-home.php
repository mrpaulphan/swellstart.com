<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<div class="home-content">
  <?php $mobile_post_objects = get_field('featured_work_mobile');
  if( $mobile_post_objects ):  ?>
      <ul class="mobile-only">
        <?php foreach( $mobile_post_objects as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <li>
            <?php
            $image = get_field('thumbnail_image');
             ?>
              <a href="<?php the_permalink(); ?>">
                  <div class="block ">
                      <figure class="effect-layla height_375">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          <figcaption>
                              <h2><?php the_field('thumbnail_heading'); ?></h2>
                              <h3><?php the_field('thumbnail_subheading');?></h3>
                          </figcaption>
                      </figure>
                  </div>
              </a>
          </li>
      <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
  <?php endif; ?>

  <?php $post_objects = get_field('featured_work');
  if( $post_objects ):  ?>
      <ul>
        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <li>
            <?php
            $image = get_field('thumbnail_image');
             ?>
              <a href="<?php the_permalink(); ?>">
                  <div class="block ">
                      <figure class="effect-layla height_375">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          <figcaption>
                              <h2><?php the_field('thumbnail_heading'); ?></h2>
                              <h3><?php the_field('thumbnail_subheading');?></h3>
                          </figcaption>
                      </figure>
                  </div>
              </a>
          </li>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
      </ul>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
