<?php get_header(); ?>

  <main class='home'>
    <section class='banner'>
      <div class='back'>
        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/accessible-rooms-1.jpg' alt='' />
      </div>
      <div class='container'>
        <div class='wrapper'>
          <h1><?php echo get_field('banner_title_home') ?></h1>
          <?= do_shortcode('[contact-form-7 id="63" title="Untitled"]'); ?>
          <!--          <form>-->
          <!--            <label>-->
          <!--              <span>When</span>-->
          <!--              <input type='date' required />-->
          <!--            </label>-->
          <!--            <label>-->
          <!--              <span>Guests</span>-->
          <!--              <select>-->
          <!--                <option>Select Guests</option>-->
          <!--              </select>-->
          <!--            </label>-->
          <!--            <button type='submit' class='intro-btn btn-scarlet'>-->
          <!--              <span class='intro-btn-p'>Check availability</span>-->
          <!--              <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
          <!--                <path d="M10.125 1.25L16.875 8M16.875 8L10.125 14.75M16.875 8H0" stroke="white" />-->
          <!--              </svg>-->
          <!--            </button>-->
          <!--          </form>-->
        </div>
      </div>
    </section>
    <section class='welcome'>
      <div class='container'>
        <div class='wrapper'>
          <div class='contacts'>
            <h2><?php echo get_field('welcome_title') ?></h2>
            <p class='description'>
              <?php echo get_field('welcome_description') ?>
            </p>
            <h3><?php echo get_field('welcome_subtitle_1') ?></h3>
            <p class='address'><?php echo get_field('welcome_adress') ?></p>
            <?php if (have_rows('list_find_us')): ?>
              <ul class="slides">
                <?php while (have_rows('list_find_us')): the_row();
                  $tel = get_sub_field('tel');
                  $email = get_sub_field('email');
                  $location = get_sub_field('location');
                  ?>
                  <li>
                    <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg' alt=''>
                    <p><?php echo $tel ?></p>
                  </li>
                  <li>
                    <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg' alt=''>
                    <p><?php echo $email ?></p>
                  </li>
                  <li>
                    <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/loc.svg' alt=''>
                    <p><?php echo $location ?></p>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
            <!--            --><?php
              //              wp_nav_menu([
              //                'theme_location' => 'welcome-find-us',
              //                'container' => null,
              //                'item_wrap' => '<ul>%3$s</ul>',
              //              ]);
              //            ?>
            <!--            <ul>-->
            <!--              <li>-->
            <!--                <img src='./assets/img/icons/phone.svg' alt=''>-->
            <!--                <a href='tel:+61 8 8368 9900'>+61 8 8368 9900</a>-->
            <!--              </li>-->
            <!--              <li>-->
            <!--                <img src='./assets/img/icons/mail.svg' alt=''>-->
            <!--                <a href='mailto:myemail@gmail.com'>Email</a>-->
            <!--              </li>-->
            <!--              <li>-->
            <!--                <img src='./assets/img/icons/loc.svg' alt=''>-->
            <!--                <a href='#'>Parking & Directions</a>-->
            <!--              </li>-->
            <!--            </ul>-->
          </div>
          <div class='facilities'>
            <div class='content'>
              <h2><?php echo get_field('welcome_subtitle_2') ?></h2>
              <div class='facilities-wrapper'>
                <?php if (have_rows('list_fecilities')): ?>
                  <ul class="slides">
                    <?php while (have_rows('list_fecilities')): the_row();
                      $wifi = get_sub_field('wifi');
                      $reception = get_sub_field('reception');
                      $parking = get_sub_field('parking');
                      $restaurant = get_sub_field('restaurant');
                      $gym = get_sub_field('gym');
                      $pool = get_sub_field('pool');
                      ?>
                      <li>
                        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/wifi.svg' alt=''>
                        <p><?php echo $wifi ?></p>
                      </li>
                      <li>
                        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/reception.svg' alt=''>
                        <p><?php echo $reception ?></p>
                      </li>
                      <li>
                        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/parking.svg' alt=''>
                        <p><?php echo $parking ?></p>
                      </li>
                      <li>
                        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/restaurant.svg' alt=''>
                        <p><?php echo $restaurant ?></p>
                      </li>
                      <li>
                        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/gym.svg' alt=''>
                        <p><?php echo $gym ?></p>
                      </li>
                      <li>
                        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/pool.svg' alt=''>
                        <p><?php echo $pool ?></p>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
                <!--                --><?php
                  //                  wp_nav_menu([
                  //                    'theme_location' => 'welcome-facilities',
                  //                    'container' => null,
                  //                    'item_wrap' => '<ul>%3$s</ul>',
                  //                  ]);
                  //                ?>
                <!--                <ul class='items'>-->
                <!--                  <li>-->
                <!--                    <img src='./assets/img/icons/wifi.svg' alt=''>-->
                <!--                    <p>Free Wi-Fi</p>-->
                <!--                  </li>-->
                <!--                  <li>-->
                <!--                    <img src='./assets/img/icons/reception.svg' alt=''>-->
                <!--                    <p>24hr Reception</p>-->
                <!--                  </li>-->
                <!--                  <li>-->
                <!--                    <img src='./assets/img/icons/parking.svg' alt=''>-->
                <!--                    <p>Parking</p>-->
                <!--                  </li>-->
                <!--                  <li>-->
                <!--                    <img src='./assets/img/icons/restaurant.svg' alt=''>-->
                <!--                    <p>Restaurant</p>-->
                <!--                  </li>-->
                <!--                  <li>-->
                <!--                    <img src='./assets/img/icons/gym.svg' alt=''>-->
                <!--                    <p>Gym</p>-->
                <!--                  </li>-->
                <!--                  <li>-->
                <!--                    <img src='./assets/img/icons/pool.svg' alt=''>-->
                <!--                    <p>Pool</p>-->
                <!--                  </li>-->
                <!--                </ul>-->
              </div>
              <a href='#'>See more</a>
            </div>
            <label>
              <select class='welcome-select'>
                <option>Fully flexible cancellation.</option>
              </select>
            </label>
          </div>
        </div>
      </div>
    </section>
    <!--    <section class='rooms'>-->
    <!--      <div class='container'>-->
    <!--        <h2>Our Rooms at HotelMOTEL</h2>-->
    <!--      </div>-->
    <!--      <div class='swiper swiper-rooms'>-->
    <!--        <div class='swiper-wrapper'>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img class='img-room' src='./assets/img/accessible-rooms-1.jpg' alt=''>-->
    <!--            <div class='link'>-->
    <!--              <a href='#'>-->
    <!--                <h3>Double Double Room</h3>-->
    <!--                <img class='img-right-arrow' src='./assets/img/icons/right-arrow-white.svg' alt=''>-->
    <!--              </a>-->
    <!--              <p>A quintessential experience, with easy-going vibes. The HM Double Double Room offers two double beds,-->
    <!--                with-->
    <!--                a coffee pod machine...</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img class='img-room' src='./assets/img/home-events.png' alt=''>-->
    <!--            <div class='link'>-->
    <!--              <a href='#'>-->
    <!--                <h3>Double Double Room</h3>-->
    <!--                <img class='img-right-arrow' src='./assets/img/icons/right-arrow-white.svg' alt=''>-->
    <!--              </a>-->
    <!--              <p>A quintessential experience, with easy-going vibes. The HM Double Double Room offers two double beds,-->
    <!--                with-->
    <!--                a coffee pod machine...</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img class='img-room' src='./assets/img/accessible-rooms-1.jpg' alt=''>-->
    <!--            <div class='link'>-->
    <!--              <a href='#'>-->
    <!--                <h3>Double Double Room</h3>-->
    <!--                <img class='img-right-arrow' src='./assets/img/icons/right-arrow-white.svg' alt=''>-->
    <!--              </a>-->
    <!--              <p>A quintessential experience, with easy-going vibes. The HM Double Double Room offers two double beds,-->
    <!--                with-->
    <!--                a coffee pod machine...</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img class='img-room' src='./assets/img/accessible-rooms-1.jpg' alt=''>-->
    <!--            <div class='link'>-->
    <!--              <a href='#'>-->
    <!--                <h3>Double Double Room</h3>-->
    <!--                <img class='img-right-arrow' src='./assets/img/icons/right-arrow-white.svg' alt=''>-->
    <!--              </a>-->
    <!--              <p>A quintessential experience, with easy-going vibes. The HM Double Double Room offers two double beds,-->
    <!--                with-->
    <!--                a coffee pod machine...</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="swiper-pagination"></div>-->
    <!--        <div class="swiper-btn swiper-button-prev"></div>-->
    <!--        <div class="swiper-btn swiper-button-next"></div>-->
    <!--      </div>-->
    <!--    </section>-->
    <!--    <section class='restaurants-and-bars'>-->
    <!--      <div class='swiper swiper-restaurants'>-->
    <!--        <div class='container'>-->
    <!--          <h2>Restaurants & Bars</h2>-->
    <!--        </div>-->
    <!--        <div class='swiper-wrapper'>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/home-restaurants-1.png' alt=''>-->
    <!--            <div>-->
    <!--              <h3>HotelMOTEL In-Room Dining</h3>-->
    <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
    <!--                deliciousness...</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/apartments-1.png' alt=''>-->
    <!--            <div>-->
    <!--              <h3>HotelMOTEL In-Room Dining</h3>-->
    <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
    <!--                deliciousness...</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/home-events.png' alt=''>-->
    <!--            <div>-->
    <!--              <h3>Terrace Bar & Kitchen Breakfast</h3>-->
    <!--              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam corporis, dolorem ea-->
    <!--                explicabo facilis fugiat laboriosam modi omnis veritatis!</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/home-restaurants-1.png' alt=''>-->
    <!--            <div>-->
    <!--              <h3>HotelMOTEL In-Room Dining</h3>-->
    <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
    <!--                deliciousness...</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/home-restaurants-2.png' alt=''>-->
    <!--            <div>-->
    <!--              <h3>Terrace Bar & Kitchen Breakfast</h3>-->
    <!--              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam corporis, dolorem ea-->
    <!--                explicabo facilis fugiat laboriosam modi omnis veritatis!</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="swiper-btn swiper-button-prev"></div>-->
    <!--        <div class="swiper-btn swiper-button-next"></div>-->
    <!--        <div class='swiper-scrollbar'></div>-->
    <!--      </div>-->
    <!--    </section>-->
    <section class='events'>
      <div class='container'>
        <img class='back' src='<?php echo get_template_directory_uri(); ?>/assets/img/home-events.png' alt=''>
        <div class='block-content'>
          <div class='content'>
            <h2><?php echo get_field('events_title') ?></h2>
            <p>
              <?php echo get_field('events_description') ?>
            </p>
            <img class='img' src='<?php echo get_template_directory_uri(); ?>/assets/img/home-events.png' alt=''>
            <!--            --><?php
              //              wp_nav_menu([
              //                'theme_location' => 'events',
              //                'container' => null,
              //                'item_wrap' => '<ul>%3$s</ul>',
              //              ]);
              //            ?>
          </div>
        </div>
      </div>
    </section>
    <!--    <section class='model-1-swiper'>-->
    <!--      <div class='container'>-->
    <!--        <h2>Offers & Promotions</h2>-->
    <!--        <div class='swiper swiper-model-1'>-->
    <!--          <div class='swiper-wrapper'>-->
    <!--            <div class='swiper-slide'>-->
    <!--              <img class='back' src='./assets/img/home-events.png' alt=''>-->
    <!--              <div class='content'>-->
    <!--                <div class='swiper-pagination'></div>-->
    <!--                <h3>Come Alive. Travel Longer</h3>-->
    <!--                <p>What makes you come alive? Here’s your chance to find out, with up to 15% off long stays across-->
    <!--                  Australia with the Independent Collection by EVENT.</p>-->
    <!--                <a class='btn'>-->
    <!--                  <span>FROM $125</span>-->
    <!--                  <img src='./assets/img/icons/right-arrow-white.svg' alt=''>-->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class='swiper-slide'>-->
    <!--              <img class='back' src='./assets/img/home-offers-1.jpg' alt=''>-->
    <!--              <div class='content'>-->
    <!--                <div class='swiper-pagination'></div>-->
    <!--                <h3>Come Alive. Travel Longer</h3>-->
    <!--                <p>What makes you come alive? Here’s your chance to find out, with up to 15% off long stays across-->
    <!--                  Australia with the Independent Collection by EVENT.</p>-->
    <!--                <a class='btn'><span>FROM $125</span><img src='./assets/img/icons/right-arrow-white.svg' alt=''>-->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class='swiper-slide'>-->
    <!--              <img class='back' src='./assets/img/home-offers-1.jpg' alt=''>-->
    <!--              <div class='content'>-->
    <!--                <div class='swiper-pagination'></div>-->
    <!--                <h3>Come Alive. Travel Longer</h3>-->
    <!--                <p>What makes you come alive? Here’s your chance to find out, with up to 15% off long stays across-->
    <!--                  Australia with the Independent Collection by EVENT.</p>-->
    <!--                <a class='btn'><span>FROM $125</span><img src='./assets/img/icons/right-arrow-white.svg' alt=''>-->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="swiper-btn swiper-button-prev"></div>-->
    <!--          <div class="swiper-btn swiper-button-next"></div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </section>-->
    <!--    <section class='comments'>-->
    <!--      <div class='container'>-->
    <!--        <div class='swiper swiper-comments'>-->
    <!--          <div class='swiper-wrapper'>-->
    <!--            <div class='swiper-slide'>-->
    <!--              <p>“Grand views, parkland location and easy access to downtown make this a great place to stay.“</p>-->
    <!--              <p>– The Weekend Australian</p>-->
    <!--            </div>-->
    <!--            <div class='swiper-slide'>-->
    <!--              <p>“Grand views, parkland location and easy access to downtown make this a great place to stay.“</p>-->
    <!--              <p>– The Weekend Australian</p>-->
    <!--            </div>-->
    <!--            <div class='swiper-slide'>-->
    <!--              <p>“Grand views, parkland location and easy access to downtown make this a great place to stay.“</p>-->
    <!--              <p>– The Weekend Australian</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class='swiper-scrollbar'></div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </section>-->
    <!--    <section class='socials'>-->
    <!--      <h2>Our Socials</h2>-->
    <!--      <div class='icons'>-->
    <!--        <a href='#'><img class='facebook' src='./assets/img/icons/facebook.svg' alt=''></a>-->
    <!--        <a href='#'><img class='instagram' src='./assets/img/icons/instagram.svg' alt=''></a>-->
    <!--      </div>-->
    <!--      <div class='swiper swiper-socials'>-->
    <!--        <div class='swiper-wrapper'>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/home-events.png' alt=''>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/apartments-1.png' alt=''>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/socials-1.png' alt=''>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/socials-2.png' alt=''>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/socials-3.png' alt=''>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/socials-4.png' alt=''>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/socials-5.png' alt=''>-->
    <!--          </div>-->
    <!--          <div class='swiper-slide'>-->
    <!--            <img src='./assets/img/socials-6.png' alt=''>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </section>-->
    <?php include 'subscription.php'; ?>
    <?php include 'info.php'; ?>
  </main>

<?php get_footer(); ?>