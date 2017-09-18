<?php
/*
Template Name: Photography
*/
?>
<?php get_header(); ?>
<?php
$args = array(
  'post_type' => 'photos',
  'posts_per_page' => -1
);
$i = 0;
$gallery = new WP_Query( $args );
?>
<main class="page">
  <section class="filter">
    <ul class="filter__list">
      <li class="filter__item--label">Jump To:</li>
      <?php while ( $gallery->have_posts() ) : $gallery->the_post();  ?>
      <li class="filter__item"><a href="#gallery-<?php the_ID(); ?>" class="filter__link"><?php the_title(); ?></a></li>
       <?php endwhile; ?>
    </ul>
  </section>
  <!-- /.filter -->
  <section class="gallery">
    <h1 class="gallery__heading">Photography</h1>
    <?php while ( $gallery->have_posts() ) : $gallery->the_post();  ?>
    <div class="gallery__row">
      <h2 id="gallery-<?php the_ID(); ?>" class="gallery__title"><?php the_title(); ?></h2>
      <div class="gallery__slide">
        <?php $images = get_field('gallery'); ?>
        <?php if ($images): ?>
          <div id="gallery__slider-for--<?php echo $i ?>" class="gallery__slider-for">
            <?php foreach( $images as $image ): ?>
            <li class="gallery__slider-for__item">
              <a href="<?php echo $image['url']; ?>"><img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt']; ?>" /></a>
            </li>
            <?php endforeach; ?>
          </div>
          <!-- /.gallery__slider-for -->
          <div class="gallery__sidebar">
            <div class="gallery__arrow gallery__arrow--top gallery__arrow-top--<?php echo $i ?>"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 142 68" style="enable-background:new 0 0 142 68;" xml:space="preserve">

<polygon class="st0" points="138.3,66.4 3.3,66.4 70.8,0.9 "/>
</svg>
</div>
            <div id="gallery__slider-nav--<?php echo $i ?>" class="gallery__slider-nav">
              <?php foreach( $images as $image ): ?>
                <li class="gallery__slider-nav__item">
                  <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </li>
              <?php endforeach; ?>
            </div>
            <!-- /.gallery__slider-nav -->
            <div class="gallery__arrow gallery__arrow--bottom gallery__arrow-bottom--<?php echo $i ?>"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 142 68" style="enable-background:new 0 0 142 68;" xml:space="preserve">

            <polygon class="st0" points="3.3,0.9 138.3,0.9 70.8,66.4 "/>
            </svg></div>
          </div>
          <?php $i++; endif; ?>
        </div>
    </div>
    <!-- /.gallery__row -->
    <?php endwhile; ?>
  </section>
  <!-- /.gallery -->
</main>
<?php get_footer(); ?>
