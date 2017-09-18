<?php
/*
Template Name: Project Member
*/
?>
<?php get_header(); ?>
<main class="announcement">
  <div class="page">
    <?php if (post_password_required()): ?>
      <div class="announcement__protected">
        <div class="longform">
          <?php the_field('password_form_content'); ?>
        </div>
        <br>
      <?php echo get_the_password_form(); ?>
      </div>
    <?php else: ?>
        <?php
        $args = array( 'post_type' => 'announcement', 'posts_per_page' => 3 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <section class="announcement__post">
          <header class="announcement__post-header">
            <h1 class="announcement__post-title"><?php the_title(); ?></h1>
            <h2 class="announcement__post-date"><?php the_date('F n, Y'); ?></h2>
          </header>
          <div class="row announcement__row">
            <div class="row__main announcement__main">
              <div class="longform">
                <?php the_content(); ?>
              </div>
            </div>
            <!-- ./row__main -->
            <div class="row__sidebar announcement__sidebar">
              <?php if( have_rows('row') ): ?>
                  <?php  while ( have_rows('row') ) : the_row(); ?>
                    <div class="announcement__sidebar-block longform">
                      <?php if (get_row_layout() == 'block'): ?>
                       <h3><?php echo get_sub_field('heading'); ?></h3>
                       <div class=""><?php echo get_sub_field('content'); ?></div>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <!-- ./row__sidebar -->
          </div>
          <!-- ./announcement__row -->

        </section>
        <!-- ./row -->

        <?php endwhile; ?>

        <?php // TODO: <!-- pagination --> ?>
    <?php endif; ?>
  </div>
</main>


<?php get_footer(); ?>
