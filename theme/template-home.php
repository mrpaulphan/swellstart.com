<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<?php
$ad_block = get_field('ad_block');
$ad_block_array = [];
$work_array = [];
$works = get_field('featured_work');
// check if the repeater field has rows of data
if( have_rows('ad_block') ):
 	// loop through the rows of data
    while ( have_rows('ad_block') ) : the_row();
    $ad_block_array[get_sub_field('position')] = array(
        'image' => get_sub_field('image')['url'],
        'url' => get_sub_field('url'),
        'position' => get_sub_field('position'),
        'display' => get_sub_field('display'),
    );
    endwhile;
endif;

echo "<pre>";
 //var_dump($ad_block_array);
 echo "</pre>";


foreach ($works as $key => $work) {
  $key++;
    if (array_key_exists($key, $ad_block_array)) {
      $key++;
    }
    $work_array[$key] = $work->to_array();
}
foreach ($ad_block_array as $ad) {
  $position =  $ad['position'] - 1;
  //$work_array[$key] = $ad;
}

echo "<pre>";
 //var_dump($work_array);
 echo "</pre>";

 $c = array_intersect_key($ad_block_array, $work_array);


echo "<pre>";
 var_dump($c );
 echo "</pre>";


 ?>



<div class="home-content">
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
