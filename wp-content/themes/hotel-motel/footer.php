<footer class='footer'>
  <div class='container'>
    <div class='content'>
      <a class='logo' href='<?php echo home_url() ?>'>
        <img src='http://localhost/hotel-motel/wp-content/uploads/2023/04/logo.png' alt=''>
      </a>
      <ul>
        <li><h3>Find</h3></li>
        <?php
          wp_nav_menu([
            'theme_location' => 'footer-find',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </ul>
      <ul>
        <li><h3>Explore</h3></li>
        <?php
          wp_nav_menu([
            'theme_location' => 'footer-explore',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </ul>
      <ul>
        <li><h3>About</h3></li>
        <?php
          wp_nav_menu([
            'theme_location' => 'footer-about',
            'container' => null,
            'item_wrap' => '<ul>%3$s</ul>',
          ]);
        ?>
      </ul>
      <ul>
        <li><h3>Social</h3></li>
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
<!--<script src='./assets/js/main.js'></script>-->
<!--<script src='./assets/js/home.js'></script>-->
</body>
</html>