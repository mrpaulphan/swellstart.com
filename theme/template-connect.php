<?php
/*
Template Name: Connect Page
*/
?>
<?php get_header(); ?>
<div id="map"></div>
<div class="map-card">
    <h1><?php the_field('heading'); ?></h1>
    <p class="subhead"><?php the_field('sub_heading'); ?></p>
    <?php if (have_rows('address')): ?>
      <?php while ( have_rows('address') ) : the_row(); ?>
        <p class="connect-address small-text">
          <a href="<?php the_sub_field('google_maps_url') ?>">
            <?php the_sub_field('address') ?>
        </p>
        <p class="orange-text ">&bull;</p>
      <?php endwhile; ?>
    <?php endif; ?>
    <p class="phone-num small-text">
        <a href="tel:<?php the_field('phone_number') ?>"><?php the_field('phone_number') ?></a>
    </p>
    <p class="orange-text">&bull;</p>
    <p class="email-address small-text">
        <a href="mailto:<?php str_replace(".", "", the_field('email')) ?>"><?php the_field('email') ?></a>
    </p>
     <p class="social-links">
        <a class="fb" href="https://www.facebook.com/swellbook" target="_blank"><img src="images/social-facebook-blue.png"></a>
        <a href="https://instagram.com/swell_phl" target="_blank"><img src="images/social-insta-blue.png"></a>
        <a href="https://twitter.com/swellees" target="_blank"><img src="images/social-twitter-blue.png"></a>
        <a href="https://www.linkedin.com/company/2338545?trk=prof-0-ovw-curr_pos" target="_blank"><img src="images/social-linkedin-blue.png"></a>
    </p>
</div>
<?php get_footer(); ?>
