</div>
<!-- ./content -->
<footer class="footer__content">
  <div class="page">
    <p class="footer__copyright">&copy;<?php echo date('Y') ?> <?php the_field('footer_text', 'option'); ?></p>
      <?php
      if ( has_nav_menu( $location ) ) {
        wp_nav_menu(
          array(
          'theme_location' => 'main-menu',
          'menu_class' => 'nav nav--main',
          'container' => 'nav',
          )
        );
      } ?>
  </div>
</footer>
<!-- ./footer -->
<?php wp_footer(); ?>
<!-- ./wp_footer -->
</body>
</html>
