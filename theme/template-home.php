<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<?php
$works = get_field('featured_work');
?>

<div class="home-content">
  <?php $post_objects = get_field('featured_work');
  if( $post_objects ):  ?>
      <ul>
        <?php foreach($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <?php
          if ($post->post_type == 'ads') {
            $image = get_field('image');
            $url = get_field('url');
            $figure_class = '';
            $display = get_field('display');
            if ($display == 'all') {
              $display_class = '';
            } elseif($display == 'mobile') {
              $display_class = 'mobile-only';
            } elseif($display == 'desktop') {
              $display_class = 'desktop-only';
            }
          } else {
            $image = get_field('thumbnail_image');
            $url = get_permalink();
            $figure_class = 'effect-layla ';
            $display_class = '';
          }
           ?>
          <li class="<?php echo $display_class; ?>">
              <a href="<?php echo $url; ?>">
                  <div class="block">
                      <figure class="<?php echo $figure_class; ?>height_375">
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
