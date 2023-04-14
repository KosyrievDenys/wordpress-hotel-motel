<?php
  //Template Name: Rooms
?>

<?php get_header(); ?>

  <main class='our-rooms'>
    <section class='banner'>
      <div class='back'>
        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/our-rooms-banner-back.jpg' alt='' />
      </div>
      <div class='container'>
        <div class='wrapper'>
          <h1><?php echo get_field('banner_our_rooms_title') ?></h1>
        </div>
      </div>
    </section>
    <section class='rooms'>
      <div class='container'>
        <div class='selected-rooms'>
          <div class='selected-intro'>
            <span class='selected-title'>Filter by</span>
            <div class='selected'>
              <div class='selected-window'>
                <span class='selected-search'>All rooms</span>
                <svg viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L5 5L9 1" stroke="#37393B" />
                </svg>
              </div>
              <div class='selected-link-block'>
                <ul class='selected-link'>
                  <li class='link-item' value='all-rooms'>All rooms</li>
                  <li class='link-item' value='accessible-rooms'>Accessible rooms</li>
                  <li class='link-item' value='suites'>Suites</li>
                  <li class='link-item' value='apartments'>Apartments</li>
                </ul>
              </div>
            </div>
          </div>
          <div class='selected-items'>
            <?php
              $my_posts = get_posts(array(
                'numberposts' => -1,
                'category_name' => 'room',
                'orderby' => 'date',
                'order' => 'ASC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'suppress_filters' => true,
              ));

              global $post;

              foreach ($my_posts as $post) {
                setup_postdata($post);
                ?>

                <?php if (have_rows('room')): ?>
                  <?php while (have_rows('room')): the_row();
                    $room_photo = get_sub_field('room_photo');
                    $room_title = get_sub_field('room_title');
                    $room_description = get_sub_field('room_description');
                    $room_category = get_sub_field('room_category');
                    ?>
                    <a href='./rooms-detail.html' class='selected-item accessible-rooms'>
                      <div class='image'>
                        <span class='accessible-rooms-title'><?php echo $room_category ?></span>
                        <img class='room' src='<?php echo $room_photo ?>' alt=''>
                      </div>
                      <div class='room-title'>
                        <h3><?php echo $room_title ?></h3>
                        <img class='img-right-arrow'
                             src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg'
                             alt=''>
                      </div>
                      <p><?php echo $room_description ?></p>
                    </a>
                  <?php endwhile; ?>
                <?php endif; ?>

                <!--                <a href='./rooms-detail.html' class='selected-item accessible-rooms'>-->
                <!--                  <div class='image'>-->
                <!--                    <span class='accessible-rooms-title'>Accessible Rooms</span>-->
                <!--                    <img class='room' src='./assets/img/home-events.png' alt=''>-->
                <!--                  </div>-->
                <!--                  <div class='room-title'>-->
                <!--                    <h3>Double Double Room</h3>-->
                <!--                    <img class='img-right-arrow'-->
                <!--                         src='./assets/img/icons/right-arrow-white.svg'-->
                <!--                         alt=''>-->
                <!--                  </div>-->
                <!--                  <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
                <!--                    deliciousness-->
                <!--                    waiting to be ordered through the...</p>-->
                <!--                </a>-->

                <?php
              }
              wp_reset_postdata();
            ?>
            <!--            <a href='rooms-detail.html' class='selected-item suites'>-->
            <!--              <div class='image'>-->
            <!--                <span class='suites-title'>Suites</span>-->
            <!--                <img class='room' src='./assets/img/suites-1.png' alt=''>-->
            <!--              </div>-->
            <!--              <div class='room-title'><h3>Family Room</h3><img class='img-right-arrow'-->
            <!--                                                               src='./assets/img/icons/right-arrow-white.svg'-->
            <!--                                                               alt=''></div>-->
            <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
            <!--                deliciousness-->
            <!--                waiting to be ordered through the...</p>-->
            <!--            </a>-->
            <!--            <a href='./rooms-detail.html' class='selected-item apartments'>-->
            <!--              <div class='image'>-->
            <!--                <span class='apartments-title'>Apartments</span>-->
            <!--                <img class='room' src='./assets/img/apartments-1.png' alt=''>-->
            <!--              </div>-->
            <!--              <div class='room-title'><h3>King Room</h3><img class='img-right-arrow'-->
            <!--                                                             src='./assets/img/icons/right-arrow-white.svg'-->
            <!--                                                             alt=''></div>-->
            <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
            <!--                deliciousness-->
            <!--                waiting to be ordered through the...</p>-->
            <!--            </a>-->
            <!--            <a href='./rooms-detail.html' class='selected-item accessible-rooms'>-->
            <!--              <div class='image'>-->
            <!--                <span class='accessible-rooms-title'>Accessible Rooms</span>-->
            <!--                <img class='room' src='./assets/img/accessible-rooms-1.jpg' alt=''>-->
            <!--              </div>-->
            <!--              <div class='room-title'><h3>Double Double Room</h3><img class='img-right-arrow'-->
            <!--                                                                      src='./assets/img/icons/right-arrow-white.svg'-->
            <!--                                                                      alt=''></div>-->
            <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
            <!--                deliciousness-->
            <!--                waiting to be ordered through the...</p>-->
            <!--            </a>-->
            <!--            <a href='./rooms-detail.html' class='selected-item accessible-rooms'>-->
            <!--              <div class='image'>-->
            <!--                <span class='accessible-rooms-title'>Accessible Rooms</span>-->
            <!--                <img class='room' src='./assets/img/home-events.png' alt=''>-->
            <!--              </div>-->
            <!--              <div class='room-title'><h3>Double Double Room</h3><img class='img-right-arrow'-->
            <!--                                                                      src='./assets/img/icons/right-arrow-white.svg'-->
            <!--                                                                      alt=''></div>-->
            <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
            <!--                deliciousness-->
            <!--                waiting to be ordered through the...</p>-->
            <!--            </a>-->
            <!--            <a href='./rooms-detail.html' class='selected-item suites'>-->
            <!--              <div class='image'>-->
            <!--                <span class='suites-title'>Suites</span>-->
            <!--                <img class='room' src='./assets/img/suites-1.png' alt=''>-->
            <!--              </div>-->
            <!--              <div class='room-title'><h3>Family Room</h3><img class='img-right-arrow'-->
            <!--                                                               src='./assets/img/icons/right-arrow-white.svg'-->
            <!--                                                               alt=''></div>-->
            <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
            <!--                deliciousness-->
            <!--                waiting to be ordered through the...</p>-->
            <!--            </a>-->
            <!--            <a href='./rooms-detail.html' class='selected-item apartments'>-->
            <!--              <div class='image'>-->
            <!--                <span class='apartments-title'>Apartments</span>-->
            <!--                <img class='room' src='./assets/img/apartments-1.png' alt=''>-->
            <!--              </div>-->
            <!--              <div class='room-title'><h3>King Room</h3><img class='img-right-arrow'-->
            <!--                                                             src='./assets/img/icons/right-arrow-white.svg'-->
            <!--                                                             alt=''></div>-->
            <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
            <!--                deliciousness-->
            <!--                waiting to be ordered through the...</p>-->
            <!--            </a>-->
            <!--            <a href='./rooms-detail.html' class='selected-item accessible-rooms'>-->
            <!--              <div class='image'>-->
            <!--                <span class='accessible-rooms-title'>Accessible Rooms</span>-->
            <!--                <img class='room' src='./assets/img/accessible-rooms-1.jpg' alt=''>-->
            <!--              </div>-->
            <!--              <div class='room-title'><h3>Double Double Room</h3><img class='img-right-arrow'-->
            <!--                                                                      src='./assets/img/icons/right-arrow-white.svg'-->
            <!--                                                                      alt=''></div>-->
            <!--              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of-->
            <!--                deliciousness-->
            <!--                waiting to be ordered through the...</p>-->
            <!--            </a>-->
          </div>
        </div>
      </div>
    </section>
    <section class='socials'>
      <h2>Our Socials</h2>
      <div class='icons'>
        <a href='#'><img class='facebook' src='./assets/img/icons/facebook.svg' alt=''></a>
        <a href='#'><img class='instagram' src='./assets/img/icons/instagram.svg' alt=''></a>
      </div>
      <div class='swiper swiper-socials'>
        <div class='swiper-wrapper'>
          <div class='swiper-slide'>
            <img src='./assets/img/home-events.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='./assets/img/apartments-1.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='./assets/img/socials-1.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='./assets/img/socials-2.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='./assets/img/socials-3.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='./assets/img/socials-4.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='./assets/img/socials-5.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='./assets/img/socials-6.png' alt=''>
          </div>
        </div>
      </div>
    </section>
    <section class='subscription'>
      <img class='back' src='./assets/img/subscription-back.jpg' alt=''>
      <div class='content'>
        <h2>Stay in the know</h2>
        <p>Sign up for the HotelMOTEL Newsletter and never miss an offer</p>
        <form>
          <label>
            <input type='text' placeholder='Full Name' />
          </label>
          <label>
            <input type='email' placeholder='Email Adress' />
          </label>
          <div>
            <label>
              <input type='text' placeholder='Postcode' />
            </label>
            <button>
              <span>Join</span>
              <img class='img-right-arrow' src='./assets/img/icons/right-arrow-white.svg' alt=''>
            </button>
          </div>
        </form>
      </div>
    </section>
    <section class='info'>
      <div class='container'>
        <div class='wrapper'>
          <img class='info-logo' src='./assets/img/info-logo.png' alt=''>
          <ul>
            <li>
              <img src='./assets/img/icons/info-1.svg' alt=''>
              <p>Discounts off the best rates online</p>
            </li>
            <li>
              <img src='./assets/img/icons/info-2.svg' alt=''>
              <p>Earn & redeem points</p>
            </li>
            <li>
              <img src='./assets/img/icons/info-3.svg' alt=''>
              <p>Drink & dine for less</p>
            </li>
            <li>
              <img src='./assets/img/icons/info-4.svg' alt=''>
              <p>VIP benefits & extras</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>