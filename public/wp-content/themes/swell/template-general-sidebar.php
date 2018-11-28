<?php
/*
Template Name: Default - Sidebar
*/
?>
<?php get_header(); ?>
<?php if (get_field('template')): ?>
  <main class="page" data-template="<?php the_field('template'); ?>">
    <h1 class="post__title"><?php the_title(); ?><?php if (get_field('year')): ?> <span class="post__year">(<?php the_field('year'); ?>)</span><?php endif; ?></h1>
    <?php if (get_field('subheading')): ?>
      <h3 class="post__subheading"><?php the_field('subheading'); ?></h3>
    <?php endif; ?>
    <div class="row">
      <div class="row__main longform">
        <?php the_field('main_body'); ?>
      </div>
      <div class="row__sidebar longform">
        <?php if( have_rows('row') ): ?>
            <?php  while ( have_rows('row') ) : the_row(); ?>
              <div class="post__sidebar-block longform">
                <?php if (get_row_layout() == 'block'): ?>
                 <h3><?php echo get_sub_field('heading'); ?></h3>
                 <div class=""><?php echo get_sub_field('content'); ?></div>
               <?php elseif(get_row_layout() == 'poster'): ?>
                 <img src="<?php echo get_sub_field('poster')['url']; ?>" alt="<?php echo get_sub_field('poster')['title'] ?>">
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </main>
  <?php else: ?>
    <main class="page">
      <h1 class="post__title"><?php the_title(); ?></span></h1>
      <div class="row">
        <div class="row__main longform">
          <?php the_field('main_body'); ?>
        </div>
        <div class="row__sidebar longform">
          <?php if( have_rows('row') ): ?>
              <?php  while ( have_rows('row') ) : the_row(); ?>
                <div class="post__sidebar-block longform">
                  <?php if (get_row_layout() == 'block'): ?>
                   <h3><?php echo get_sub_field('heading'); ?></h3>
                   <div class=""><?php echo get_sub_field('content'); ?></div>
                 <?php elseif(get_row_layout() == 'poster'): ?>
                   <img src="<?php echo get_sub_field('poster')['url']; ?>" alt="<?php echo get_sub_field('poster')['title'] ?>">
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </main>
<?php endif; ?>


<?php get_footer(); ?>
