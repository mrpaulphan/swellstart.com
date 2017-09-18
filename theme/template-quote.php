<?php
/*
Template Name: Quotes
*/
?>
<?php get_header(); ?>
<main class="">
  <div class="quotes page">
    <?php if( have_rows('quote') ): ?>
      <?php while( have_rows('quote') ): the_row();
      $link_text = get_sub_field('link_text');
      $quote = get_sub_field('quote');
      $source = get_sub_field('source');
      $link = get_sub_field('relationship');
      ?>
      <div class="quote">
        <p class="quote__text"><span class="quote__hanging quote__hanging--left">&#8220;</span><?php echo $quote; ?><span class="quote__hanging quote__hanging--right">&#8221;</span>  <span class="quote__source quote__source--large">— <?php echo $source; ?></span></p>
        <p class="quote__source quote__source--small">— <?php echo $source; ?></p>
        <a href="<?php echo $link; ?>" class="quote__link"><?php echo $link_text; ?></a>
      </div>
      <!--/.quote -->
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
