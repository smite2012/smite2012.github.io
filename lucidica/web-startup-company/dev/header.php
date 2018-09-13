<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- <link rel="stylesheet" href="css/style-libs.css"> -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- <div class="test"></div> -->
    <div class="preloader">
      <div class="pulse"></div>
    </div>
    <div class="wrapper">
      <header class="main-screen__header" id="header">
        <div class="main-screen__header-logo">
          <a href="#home">
            <!-- <img src="img/logo.png" alt="Logo"> -->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/logo.png" alt="Logo">-->
            <?php if (function_exists('the_custom_logo')) {
              the_custom_logo();
              } ?>
          </a>
        </div>
        <!-- <div class="main_screen__dark-background"></div> -->
        <div id="navigation-menu" class="main_screen__header-menu ">
          <ul class="menu">
            <li class="menu_li "><a class="menu_a" href="#Home"><?php echo get_field('main_screen_menu_title'); ?></a></li>
            <li class="menu_li "><a class="menu_a" href="#About"><?php echo get_field('section_menu_title'); ?></a></li>
            <li class="menu_li "><a class="menu_a" href="#Services"><?php echo get_field('services_menu_item_title'); ?></a></li>
            <li class="menu_li "><a class="menu_a" href="#Pricing"><?php echo get_field('pricing_menu_item_title'); ?></a></li>
            <li class="menu_li "><a class="menu_a" href="#Contact"><?php echo get_field('contact_menu_item_text'); ?></a></li>
          </ul>
        </div>
        <!-- <div class="main-screen__mobile-header"> -->
        <div class="menuToggle">
          <span class="burg"></span>
          <span class="burg"></span>
          <span class="burg"></span>
        </div>
        <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="100">
          <path
                  class="line top"
                  d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
          <path
                  class="line middle"
                  d="m 30,50 h 40" />
          <path
                  class="line bottom"
                  d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
        </svg>
        <!-- </div> -->

      </header>