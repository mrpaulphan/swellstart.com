<?php get_header(); ?>
<main data-template="<?php the_field('template'); ?>">
  <div class="page">
    <section class="breadcrumbs">
      <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item"><a href="/works/" class="breadcrumbs__link">Works</a></li>
        <?php $categories = get_the_category(); ?>
        <?php foreach ($categories as $key => $category): ?>
          <?php $category_id = $category->cat_ID;?>
          <li class="breadcrumbs__item"><a href="/works/<?php echo $category->slug ?>" class="breadcrumbs__link"><?php echo $category->name; ?></a></li>
        <?php endforeach; ?>
        <li class="breadcrumbs__item last"><span class="breadcrumbs__link"><?php the_title(); ?></span></li>
      </ul>
    </section>
    <section>
      <h1 class="post__title"><?php the_title(); ?> <span class="post__year">(<?php the_field('year'); ?>)</span></h1>
      <?php if (get_field('subheading')): ?>
        <h2 class="post__subheading"><?php the_field('subheading'); ?></h2>
      <?php endif; ?>

      <?php
      $images = get_field('gallery');
      if( $images ): ?>
    <div class="post__hero">
      <span class="post__arrow post__arrow--back"><svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 191.86 219.48"><path d="M155.32,234.75l155.32,91.36q8.84,5.43,18.27.28a17.48,17.48,0,0,0,9.14-16V127.69a17.48,17.48,0,0,0-9.14-16,20.28,20.28,0,0,0-9.13-2.29,17.48,17.48,0,0,0-9.14,2.57L155.32,203.34q-9.13,5.14-9.13,15.7T155.32,234.75Z" transform="translate(-146.18 -109.42)"/></svg></span>
      <div class="post__gallery">
        <?php foreach( $images as $image ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endforeach; ?>
      </div>
      <span class="post__arrow post__arrow--next"><svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 191.86 219.48"><path d="M328.91,203.56,173.59,112.2q-8.84-5.43-18.27-.28a17.48,17.48,0,0,0-9.14,16V310.63a17.48,17.48,0,0,0,9.14,16,20.28,20.28,0,0,0,9.13,2.29,17.48,17.48,0,0,0,9.14-2.57L328.91,235q9.13-5.14,9.13-15.7T328.91,203.56Z" transform="translate(-146.18 -109.42)"/></svg></span>
    </div>
      <?php endif; ?>
    </section>
    <section class="post__content">
      <div class="post__main">
        <div class="post__filter">
          <p class="post__tab active" data-toggle-trigger="synopsis">Synopsis <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 386.257 386.257" style="enable-background:new 0 0 386.257 386.257;" xml:space="preserve">
          <polygon points="0,96.879 193.129,289.379 386.257,96.879 "/>
          </svg></p>
          <p class="post__tab" data-toggle-trigger="trailers">Trailers <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 386.257 386.257" style="enable-background:new 0 0 386.257 386.257;" xml:space="preserve">
          <polygon points="0,96.879 193.129,289.379 386.257,96.879 "/>
          </svg></p>
          <p class="post__tab" data-toggle-trigger="director">Director’s notes <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 386.257 386.257" style="enable-background:new 0 0 386.257 386.257;" xml:space="preserve">
          <polygon points="0,96.879 193.129,289.379 386.257,96.879 "/>
          </svg></p>
          <p class="post__tab" data-toggle-trigger="credits">Credits <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 386.257 386.257" style="enable-background:new 0 0 386.257 386.257;" xml:space="preserve">
          <polygon points="0,96.879 193.129,289.379 386.257,96.879 "/>
          </svg></p>
        </div>
        <!-- /.post__filter -->
        <div class="post__block longform active" data-toggle-target="synopsis">
          <h3>Synopsis</h3>
          <?php the_field('synopsis_body') ?>
        </div>
        <!-- /.post__block synopsis-->
        <div class="post__block longform" data-toggle-target="trailers">
          <h3>Trailers</h3>
          <?php the_field('video_embed') ?>
        </div>
        <!-- /.post__block trailers-->
        <div class="post__block longform" data-toggle-target="director">
          <h3>Director’s Notes</h3>
          <?php the_field('director_body') ?>
        </div>
        <!-- /.post__block director-->
        <div class="post__block longform" data-toggle-target="credits">
          <h3>Credits</h3>
          <?php the_field('credit_body') ?>
        </div>
        <!-- /.post__block credits-->
        <?php
        $args=array(
          'posts_per_page'   => -3,
          'category' => $category_id,
          'orderby' => 'rand',
        );
        $posts=get_posts($args);
         ?>
         <?php if ($post): ?>

        <div class="post__more">
          <h1>More Films</h1>
            <?php foreach ($posts as $key => $post): ?>
              <div class="block">
                <?php setup_postdata($post);
              $image = get_field('thumbnail');
              if( $image ): ?>
                <div class="listing__thumbnail" style="background-image: url('<?php echo $image['url']; ?>')"></div>
              <?php else: ?>
                <div class="listing__thumbnail empty"></div>
              <?php endif; ?>
              <h2 class="listing__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <span class="listing__year">(<?php the_field('year'); ?>)</span></h2>
            </div>
            <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        </div>
        <!-- /.post__main -->

      <div class="post__sidebar">
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
      <!-- /.post__sidebar -->
    </section>

  </div>
</main>
<?php get_footer(); ?>
