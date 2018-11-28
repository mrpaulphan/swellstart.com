<?php get_header(); ?>
<?php
$post_object = get_field('featured');
if( $post_object ):
	// override $post
	$post = $post_object;
	setup_postdata( $post );
  $featured_image = get_field('featured_image');
  $featured_excerpt = get_field('excerpt');
  $featured_link = get_permalink();
  wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
endif;

if( have_rows('category') ):
 $category_array = [];
  while( have_rows('category') ): the_row();
     $highlighted_word = get_sub_field('highlighted_word');
     $non_highlighted_word = get_sub_field('non_highlighted_word');
     $category_relationship = (string)get_sub_field('category_relationship');
     $category_array[] = [
       'category_id' => $category_relationship,
       'category_name' => get_cat_name($category_relationship),
       'highlighted_word' => $highlighted_word,
       'non_highlighted_word' => $non_highlighted_word,
     ];
 endwhile;
endif;
$count = count($category_array);
$count_half = ceil($count/2);
?>

<div class="work-wrap">
    <div class="work-hero">
    <a href="#"><img src="<?php echo $featured_image['url'] ?>" alt="<?php echo $featured_image['alt']; ?>"></a>
        <div class="work-hero_body">
            <div class="col-1">
                <p><?php echo $featured_excerpt; ?></p>
               <a class="btn" href="<?php echo $featured_link; ?>" style="background: url('/wp-content/uploads/2017/09/bg-arrow-work.png') no-repeat 0 0;">See the work</a>
            </div>
            <div class="col-2">
                <h2>UP NEXT &hellip;</h2>
                <p><?php the_field('up_next_text'); ?></p>
            </div>
        </div>
        <div class="work-body">
            <h2>– But Wait, There's More –</h2>
            <p class="intro">See what else we’ve done</p>
						 <?php $i = 0; foreach ($category_array as $key => $category): ?>
							 <?php if ($i == 0): ?>
								<ul class="list-1 work-list">
							 <?php endif; ?>

							 <li class="">
								 <p><span><?php echo $category['highlighted_word'] ?></span> <?php echo $category['non_highlighted_word'];  ?> <span><?php echo $category['category_name'] ?></span></p>
                   <div class="filter-content" data-<?php echo $category['category_id']  ?>>
                      <ul>
                        <?php

                        $args = array( 'post_type' => 'works', 'posts_per_page' => -1, 'cat'=> (int)$category['category_id'] );
                        $posts = new WP_Query( $args );
                        while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                      <?php   endwhile;
                         ?>
                      </ul>
                   </div>
               </li>
							 <?php $i++; ?>
							 <?php if ($i ==  $count_half): ?>
							 </ul>
								 <ul class="list-2 work-list">
							 <?php endif; ?>

							 <?php if ($i == $count): ?>
							 </ul>
							 <?php endif; ?>
						 <?php endforeach; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
