<?php get_header(); ?>
<div class="about-1">
    <div class="panel">
        <div class="people-image-block">
            <div class="main-block">
              <?php
              $featured_image = get_field('featured_image');
              $featured_thumb = get_field('featured_thumbnail');
              $featured_heading = get_field('featured_heading');
              $featured_body = get_field('featured_body');
              $clients = get_field('clients');
              $client_position = (int)get_field('client_cta_position') - 1;
              $client_cta = get_field('client_cta');
              $featured_image_2 = get_field('featured_image_2');
              $bottom_body = get_field('featured_body_2');
              $cta_url = get_field('featured_cta_url');
              $cta_label = get_field('featured_cta_label');
              ?>

                <img data-img-1 class="active" src="<?php echo $featured_image['url']; ?>" alt="Well done is better than well said" />
                <?php
                $args = array( 'post_type' => 'teams', 'posts_per_page' => -1 );
                $loop = new WP_Query( $args );
                $i = 2;
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <img data-img-<?php echo $i; ?> src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" />
                <?php $i++; endwhile; ?>
            </div>
            <div class="thumb-row">
                <div data-trigger-1 class="thumb-item ben-thumb active">
                    <a href="#"><img src="<?php echo $featured_thumb['url'];  ?>" alt="" /></a>
                </div>
                <?php
                $i = 2;
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php $thumb = get_field('thumbnail');?>
                <div data-trigger-<?php echo $i; ?> class="thumb-item">
                    <a href="#">
                        <img src="<?php echo $thumb['url']; ?>" alt="<?php echo the_title(); ?>" />
                        <span class="people-text"><?php echo the_title(); ?><em><?php the_field('job_title'); ?></em></span>
                    </a>
                </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
        <div class="people-content-block">
            <div data-position-1 class="people-content active">
              <h3><?php echo $featured_heading; ?></h3>
              </br>
              <p><?php echo $featured_body; ?></p>
            </div>
            <?php
            $i = 2;
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div data-position-<?php echo $i; ?> class="people-content">
                <h3><?php the_field('headline'); ?></h3>
                </br>
                <p><?php the_field('body'); ?></p>
                </br>
                <p><a href="mailto:<?php the_field('call_to_action_email'); ?>"><?php the_field('call_to_action_label'); ?></a></p>
            </div>
            <?php $i++; endwhile; ?>
        </div>
    </div>
</div>
<div class="about-2">
    <div class="panel">
        <h2>Clients</h2>
        <div class="brands-wrap">
          <?php
          $clients_array = [];
          foreach ($clients as $key => $value) {
              if ($key == $client_position ) {
                $key++;
                array_splice($clients_array, $client_position, 0, '');
              } elseif( $key > $client_position ) {
                $key++;
              }
              $clients_array[$key] = $value;
          }
           ?>
            <?php foreach( $clients_array as $key => $image ): ?>
              <?php if ($key == $client_position): ?>
                <div class="hey-look"><?php echo $client_cta; ?></div>
                <?php else: ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ? $image['alt'] : $image['title']; ?>">
              <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="about-3">
    <div class="panel">
        <div class="col-1">
            <img src="<?php echo $featured_image_2['url'] ?>" alt="<?php echo $featured_image_2['title']; ?>" />
        </div>
        <div class="col-2">
            <?php echo $bottom_body; ?>
            <p class="btn" style="background: url('/wp-content/uploads/2017/09/bg-button.png') no-repeat 0 0;"><a href="mailto:<?php echo $cta_url; ?>"><?php echo $cta_label; ?></a></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
