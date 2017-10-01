<?php get_header(); ?>
    <div class="content work-detail">
        <div class="nav-filter-outer">
            <div class="nav-filter">
                <div class="filter-outer-wrap">
                    <div class="filter-inner-wrap">
                        <div class="filter-wrap first filter-category">
                            <a href="#" class="dropdown-trigger">Filter by category<img src="/wp-content/uploads/2017/09/dropdown-trigger.png" /></a>
                            <ul class="filters">
                              <?php $categories = get_categories(); ?>
                              <?php foreach ($categories as $category):?>
                                <li><a data-trigger-filter="<?php echo $category->term_id; ?>" href="#"><?php echo esc_html( $category->name ) ?></a></li>
                               <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="filter-wrap client-filter-wrap filter-client">
                            <a href="#" class="dropdown-trigger"> Navigate by client<img src="/wp-content/uploads/2017/09/dropdown-trigger.png" /></a>
                            <ul class="filters ">
                              <?php
                              $args = array( 'post_type' => 'works', 'posts_per_page' => -1 );
                              $loop = new WP_Query( $args );
                              while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <?php if (!get_field('is_call_to_action_block')): ?>
                                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                <?php endif; ?>
                              <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php foreach ($categories as $category):?>
                  <div class="filter-content" data-filter="<?php echo $category->term_id; ?>">
                    <ul>
                    <?php
                    $args = array( 'post_type' => 'works', 'posts_per_page' => -1,'cat' => $category->term_id );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                      <?php if (!get_field('is_call_to_action_block')): ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                      <?php endif; ?>
                    <?php endwhile; ?>
                    </ul>
                  </div>
                 <?php endforeach; ?>
            </div>
        </div>
        <div class="work-intro">
            <h1><?php the_title(); ?></h1>
            <?php the_field('intro'); ?>
            <ul class="labels">
                <?php foreach (get_the_category() as $key => $category): ?>
                  <li><?php echo $category->name; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php if (have_rows('body_enhanced')): ?>
asdfjajfl;kajs;lkfj
          <?php while ( have_rows('body_enhanced') ) : the_row(); ?>
            <?php if( get_row_layout() == 'text' ): ?>
              <?php the_sub_field('text_block'); ?>
            <?php elseif( get_row_layout() == 'image' ): ?>
              <?php $image = get_sub_field('image_block'); ?>
              <figure class="work-image-wrap width-1000 wow fadeInUp"  data-wow-delay="0s" data-wow-duration="2s">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ? $image['alt'] : $image['title']  ?>" />
              </figure>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
