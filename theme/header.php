<!DOCTYPE html>
<html lang="en" class="no-js">
  <head lang="en">
    <title><?php //wp_title();?>SWELL | Marketing Strategy, Branding, Advertising</title>
    <?php get_template_part('component/meta'); ?>
    <?php wp_head(); ?>
  </head>

</head>
  <body class="<?php echo is_user_logged_in() ?'is-logged-in' : '' ; ?>">
    <nav class="open">
        <?php wp_nav_menu( array('menu' => 'Header') ); ?>
        <?php $logo = get_field('logo', 'option'); ?>
        <?php $facebook = get_field('facebook_icon', 'option'); ?>
        <?php $twitter = get_field('twitter_icon', 'option'); ?>

        <p class="social">
            <a href="<?php the_field('twitter', 'option') ?>" target="_blank"><img src="<?php echo $twitter['url']; ?>"></a>
            <a href="<?php the_field('facebook', 'option') ?>" target="_blank"><img src="<?php echo $facebook['url']; ?>"></a>
        </p>
        <p class="logo"><img class="no-fade" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>" /></p>
    </nav>
    <h1 class="visually-hidden">Swell</h1>
