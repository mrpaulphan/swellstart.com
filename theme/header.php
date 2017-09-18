<!DOCTYPE html>
<html>
  <head lang="en">
    <title><?php wp_title();?></title>
    <?php get_template_part('component/meta'); ?>
    <?php wp_head(); ?>
    <?php get_template_part('component/head'); ?>
  </head>
  <?php
   ?>
  <body>
    <header class="header">
      <div class="page">
        <div class="header__content">
          <h1 class="header__title"><a href="/home"><span>Michael</span> <span>Bergmann</span></a></h1>
          <label for="mobile-menu" class="header__menu">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="124px" height="124px" viewBox="0 0 124 124" style="enable-background:new 0 0 124 124;" xml:space="preserve">
            <g>
              <path d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z"/>
              <path d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z"/>
              <path d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z"/>
            </g>
            </svg>
          </label>
        </div>

        <input id="mobile-menu" type="checkbox" name="" value="" class="header__menu-input">
        <?php wp_nav_menu(
          array(
          'theme_location' => 'header-menu',
          'menu_class' => 'nav__items',
          'container' => 'nav',
          'container_class' => 'nav nav--main',
          )
        );?>
      </div>
    </header>
    <!-- ./header -->
    <div class="content" id="content">
