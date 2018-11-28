<?php if ( get_field('template') == 'general'): ?>
  <?php get_template_part('template-general'); ?>
<?php elseif ( get_field('template') == 'sidebar'): ?>
  <?php get_template_part('template-general-sidebar'); ?>
<?php elseif ( get_field('template') == 'detail'): ?>
  <?php get_template_part('template-detail'); ?>
<?php endif; ?>
