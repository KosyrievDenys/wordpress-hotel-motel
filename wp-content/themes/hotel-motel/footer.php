<footer class='footer'>
  <div class='container'>
    <div class='content'>
      <a class='logo' href='<?php echo home_url() ?>'>
        <img src='http://localhost/hotel-motel/wp-content/uploads/2023/04/logo.png' alt=''>
      </a>
      <ul>
        <li><?php echo get_field('footer_title_list_1') ?></li>

        <?php
          wp_nav_menu([
            'theme_location' => 'footer-find',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </ul>
      <ul>
        <li><h3><?php echo get_field('footer_title_list_2') ?></h3></li>
        <?php
          wp_nav_menu([
            'theme_location' => 'footer-explore',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </ul>
      <ul>
        <li><h3><?php echo get_field('footer_title_list_3') ?></h3></li>
        <?php
          wp_nav_menu([
            'theme_location' => 'footer-about',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </ul>
      <ul>
        <li><h3><?php echo get_field('footer_title_list_4') ?></h3></li>
        <?php
          wp_nav_menu([
            'theme_location' => 'footer-social',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </ul>
    </div>
    <div class='copyright'>
      <p>© HotelMOTEL</p>
      <a href='#'>Privacy Policy</a>
      <a href='#'>Terms of Use</a>
    </div>
  </div>
</footer>
<!--<script src="./assets/libs/swiper/swiper.js"></script>-->
</body>
</html>