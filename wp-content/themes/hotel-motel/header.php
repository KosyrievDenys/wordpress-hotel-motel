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

<header class='header'>
  <div class='container'>
    <div class='upper-block'>
      <!--      <img class='img-search' src='http://localhost/hotel-motel/wp-content/uploads/2023/04/logo.png' alt=''>-->
      <svg class='img-search' width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M8.7199 17.04C4.1119 17.04 0.399902 13.328 0.399902 8.72C0.399902 4.112 4.1119 0.400002 8.7199 0.400002C13.3279 0.400002 17.0399 4.112 17.0399 8.72C17.0399 13.328 13.3279 17.04 8.7199 17.04ZM8.7199 1.68C4.8159 1.68 1.6799 4.816 1.6799 8.72C1.6799 12.624 4.8159 15.76 8.7199 15.76C12.6239 15.76 15.7599 12.624 15.7599 8.72C15.7599 4.816 12.6239 1.68 8.7199 1.68Z"
          fill="white" />
        <path d="M14.9164 14.0109L20.6636 19.7581L19.7587 20.663L14.0115 14.9158L14.9164 14.0109Z" fill="white" />
      </svg>
      <a href='<?php echo home_url() ?>' class='logo'><img src='http://localhost/hotel-motel/wp-content/uploads/2023/04/logo.png' alt=''></a>
      <button type='button' class='btn-scarlet'>Book</button>
    </div>
    <div class='nav-block'>
      <?php
        wp_nav_menu([
          'theme_location' => 'header-links',
          'container' => null,
          'item_wrap' => '<ul>%3$s</ul>',
        ]);
      ?>
    </div>
  </div>
</header>
<!--<header class='header'>-->
<!--  <div class='container'>-->
<!--    <div>-->
<!--      <a href='--><?php //echo home_url() ?><!--' class='logo'>--><?php //bloginfo('name') ?><!--</a>-->
<!--      <p>Header</p>-->
<!--      <nav>-->
<!--        --><?php
  //          wp_nav_menu([
  //            'theme_location' => 'top ',
  //            'container' => null,
  //            'item_wrap' => '<ul>%3$s</ul>',
  //          ]);
  //        ?>
<!--      </nav>-->
<!--    </div>-->
<!--    --><?php //if (!is_page() && is_active_sidebar('sidebar-top')): ?>
<!--      <div>-->
<!--        --><?php //dynamic_sidebar('sidebar-top') ?>
<!--      </div>-->
<!--    --><?php //endif; ?>
<!--  </div>-->
<!--</header>-->