<?php get_header(); ?>
<main class="page" data-template="<?php the_field('template'); ?>">
  <h1 class="post__title"><?php the_title(); ?>  <span class="post__year">(<?php the_field('year'); ?>)</span></h1>
  <?php if (get_field('subheading')): ?>
    <h3 class="post__subheading"><?php the_field('subheading'); ?></h3>
  <?php endif; ?>
  <div class="longform">
    <?php the_field('main_body'); ?>
  </div>
</main>
<?php get_footer(); ?>
