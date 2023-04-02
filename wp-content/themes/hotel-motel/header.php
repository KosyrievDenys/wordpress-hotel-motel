<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset='<?php bloginfo('charset') ?>'>
  <meta name='viewport'
        content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>Hotel Motel</title>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<!--<header class='header'>-->
<!--  <div class='container'>-->
<!--    <div class='upper-block'>-->
<!--      <img class='img-search' src='./assets/img/icons/search.svg' alt=''>-->
<!--      <a href='./index.html' class='logo'><img src='./assets/img/logo.png' alt=''></a>-->
<!--      <button type='button' class='btn-scarlet'>Book</button>-->
<!--    </div>-->
<!--    <div class='nav-block'>-->
<!--      <ul>-->
<!--        <li><a href='#'>Home</a></li>-->
<!--        <li><a href='./our-rooms.html'>Rooms</a></li>-->
<!--        <li><a href='./venues.html'>Venues & Events</a></li>-->
<!--        <li><a href='./dining.html'>Eat & drink</a></li>-->
<!--        <li><a href='thinks-to-do.html'>Things to do</a></li>-->
<!--        <li><a href='offers.html'>Offers</a></li>-->
<!--      </ul>-->
<!--    </div>-->
<!--  </div>-->
<!--</header>-->
<header class='header'>
  <div class='container'>
    <div>
      <a href='<?php echo home_url() ?>' class='logo'><?php bloginfo('name') ?></a>
      <p>Header</p>
      <nav>
        <?php
          wp_nav_menu([
            'theme_location' => 'top ',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </nav>
    </div>
    <?php if (!is_page() && is_active_sidebar('sidebar-top')): ?>
      <div>
        <?php dynamic_sidebar('sidebar-top') ?>
      </div>
    <?php endif; ?>
  </div>
</header>