<?php get_header(); ?>
<main>
  <div class="page">
    <?php
    $category = get_queried_object();?>
    <section class="listing">
      <div class="listing__category">
        <header class="listing__header">
          <h1 id="category-<?php echo $category->cat_ID; ?>" class="listing__category-title"><?php echo $category->name; ?></h1>
          <span class="listing__hr"></span>
        </header>
        <div>
          <?php
          $args=array(
            'posts_per_page'   => -1,
            'category'         => $category->cat_ID,
          );
          $posts=get_posts($args);
            if ($posts) {
              foreach($posts as $post) {
                setup_postdata($post); ?>
                <div class="listing__row">
                  <?php
                  $image = get_field('thumbnail');
                  if( $image ): ?>
                    <div class="listing__thumbnail" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                  <?php else: ?>
                    <div class="listing__thumbnail empty"></div>
                  <?php endif; ?>
                  <div class="listing__content">
                    <h2 class="listing__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <span class="listing__year">(<?php the_field('year'); ?>)</span></h2>
                    <?php if ( get_field('subheading') ): ?>
                      <h3 class="listing__subheading"><?php the_field('subheading'); ?></h3>
                    <?php endif; ?>
                    <div class="listing__excerpt"><?php the_field('excerpt'); ?></div>
                    <p><a href="<?php the_permalink() ?>" class="listing__cta">Read more</a></p>
                  </div>
                </div>
                <!-- /.listing__row -->
                <?php
              }
            }
           ?>
        </div>
      </div>
      <!-- /.listing__category -->
    </section>
  </div>
</main>
<?php get_footer(); ?>
