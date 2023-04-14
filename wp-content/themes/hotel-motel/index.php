<?php get_header(); ?>

  <main class='home'>
    <section class='banner'>
      <div class='back'>
        <img src='<?php echo get_template_directory_uri(); ?>/assets/img/accessible-rooms-1.jpg' alt='' />
      </div>
      <div class='container'>
        <div class='wrapper'>
          <h1><?php echo get_field('banner_home_title') ?></h1>
          <form>
            <label>
              <span>When</span>
              <input type='date' required />
            </label>
            <label>
              <span>Guests</span>
              <?php if (have_rows('banner_home_select')): ?>
                <select class="slides">
                  <?php while (have_rows('banner_home_select')): the_row();
                    $select_guests = get_sub_field('select_guests');
                    var_dump($select_guests);
                    $select_guests_2 = get_sub_field('select_guests_2');
                    ?>
                    <option>
                      <?php echo $select_guests ?>
                    </option>
                  <?php endwhile; ?>
                </select>
              <?php endif; ?>
            </label>
            <button type='submit' class='intro-btn btn-scarlet'>
              <span class='intro-btn-p'>Check availability</span>
              <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg' alt=''>
            </button>
          </form>
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
    <section class='rooms'>
      <div class='container'>
        <h2><?php echo get_field('rooms_title') ?></h2>
      </div>
      <div class='swiper swiper-rooms'>
        <div class='swiper-wrapper'>
          <div class='swiper-slide'>
            <img class='img-room' src='<?php echo get_template_directory_uri(); ?>/assets/img/accessible-rooms-1.jpg'
                 alt=''>
            <div class='link'>
              <a href='#'>
                <h3><?php echo get_field('rooms_title_slide_1') ?></h3>
                <img class='img-right-arrow'
                     src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg' alt=''>
              </a>
              <p><?php echo get_field('rooms_description_slide_1') ?></p>
            </div>
          </div>
          <div class='swiper-slide'>
            <img class='img-room' src='<?php echo get_template_directory_uri(); ?>/assets/img/home-events.png' alt=''>
            <div class='link'>
              <a href='#'>
                <h3><?php echo get_field('rooms_title_slide_1') ?></h3>
                <img class='img-right-arrow'
                     src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg' alt=''>
              </a>
              <p><?php echo get_field('rooms_description_slide_1') ?></p>
            </div>
          </div>
          <div class='swiper-slide'>
            <img class='img-room' src='<?php echo get_template_directory_uri(); ?>/assets/img/accessible-rooms-1.jpg'
                 alt=''>
            <div class='link'>
              <a href='#'>
                <h3><?php echo get_field('rooms_title_slide_1') ?></h3>
                <img class='img-right-arrow'
                     src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg' alt=''>
              </a>
              <p><?php echo get_field('rooms_description_slide_1') ?></p>
            </div>
          </div>
          <div class='swiper-slide'>
            <img class='img-room' src='<?php echo get_template_directory_uri(); ?>/assets/img/accessible-rooms-1.jpg'
                 alt=''>
            <div class='link'>
              <a href='#'>
                <h3><?php echo get_field('rooms_title_slide_1') ?></h3>
                <img class='img-right-arrow'
                     src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg' alt=''>
              </a>
              <p><?php echo get_field('rooms_description_slide_1') ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-btn swiper-button-prev"></div>
        <div class="swiper-btn swiper-button-next"></div>
      </div>
    </section>
    <section class='restaurants-and-bars'>
      <div class='swiper swiper-restaurants'>
        <div class='container'>
          <h2>Restaurants & Bars</h2>
        </div>
        <div class='swiper-wrapper'>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/home-restaurants-1.png' alt=''>
            <div>
              <h3><?php echo get_field('restaurant_and_bars_slide_1_title') ?></h3>
              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of
                deliciousness...</p>
            </div>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/apartments-1.png' alt=''>
            <div>
              <h3>HotelMOTEL In-Room Dining</h3>
              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of
                deliciousness...</p>
            </div>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/home-events.png' alt=''>
            <div>
              <h3>Terrace Bar & Kitchen Breakfast</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam corporis, dolorem ea
                explicabo facilis fugiat laboriosam modi omnis veritatis!</p>
            </div>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/home-restaurants-1.png' alt=''>
            <div>
              <h3>HotelMOTEL In-Room Dining</h3>
              <p>Enter room, check menu. It’s that simple to sate your appetite, with a fantastic selection of
                deliciousness...</p>
            </div>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/home-restaurants-2.png' alt=''>
            <div>
              <h3>Terrace Bar & Kitchen Breakfast</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam corporis, dolorem ea
                explicabo facilis fugiat laboriosam modi omnis veritatis!</p>
            </div>
          </div>
        </div>
        <div class="swiper-btn swiper-button-prev"></div>
        <div class="swiper-btn swiper-button-next"></div>
        <div class='swiper-scrollbar'></div>
      </div>
    </section>
    <section class='events'>
      <div class='container'>
        <img class='back' src='<?php echo get_template_directory_uri(); ?>/assets/img/home-events.png' alt=''>
        <div class='block-content'>
          <div class='content'>
            <h2><?php echo get_field('events_title') ?></h2>
            <p class='description'>`
              <?php echo get_field('events_description') ?>
            </p>
            <img class='img' src='<?php echo get_template_directory_uri(); ?>/assets/img/home-events.png' alt=''>
            <?php if (have_rows('list_events')): ?>
              <ul class="slides">
                <?php while (have_rows('list_events')): the_row();
                  $private_dining = get_sub_field('private_dining');
                  $private_dining_2 = get_sub_field('private_dining_2');
                  $weddings = get_sub_field('weddings');
                  ?>
                  <li>
                    <p><?php echo $private_dining ?></p>
                    <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg'
                         alt=''>
                  </li>
                  <li>
                    <p><?php echo $private_dining_2 ?></p>
                    <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg'
                         alt=''>
                  </li>
                  <li>
                    <p><?php echo $weddings ?></p>
                    <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow-white.svg'
                         alt=''>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <section class='model-1-swiper'>
      <div class='container'>
        <h2>Offers & Promotions</h2>
        <div class='swiper swiper-model-1'>
          <div class='swiper-wrapper'>
            <div class='swiper-slide'>
              <img class='back' src='./assets/img/home-events.png' alt=''>
              <div class='content'>
                <div class='swiper-pagination'></div>
                <h3>Come Alive. Travel Longer</h3>
                <p>What makes you come alive? Here’s your chance to find out, with up to 15% off long stays across
                  Australia with the Independent Collection by EVENT.</p>
                <a class='btn'>
                  <span>FROM $125</span>
                  <img src='./assets/img/icons/right-arrow-white.svg' alt=''>
                </a>
              </div>
            </div>
            <div class='swiper-slide'>
              <img class='back' src='./assets/img/home-offers-1.jpg' alt=''>
              <div class='content'>
                <div class='swiper-pagination'></div>
                <h3>Come Alive. Travel Longer</h3>
                <p>What makes you come alive? Here’s your chance to find out, with up to 15% off long stays across
                  Australia with the Independent Collection by EVENT.</p>
                <a class='btn'><span>FROM $125</span><img src='./assets/img/icons/right-arrow-white.svg' alt=''>
                </a>
              </div>
            </div>
            <div class='swiper-slide'>
              <img class='back' src='./assets/img/home-offers-1.jpg' alt=''>
              <div class='content'>
                <div class='swiper-pagination'></div>
                <h3>Come Alive. Travel Longer</h3>
                <p>What makes you come alive? Here’s your chance to find out, with up to 15% off long stays across
                  Australia with the Independent Collection by EVENT.</p>
                <a class='btn'><span>FROM $125</span><img src='./assets/img/icons/right-arrow-white.svg' alt=''>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-btn swiper-button-prev"></div>
          <div class="swiper-btn swiper-button-next"></div>
        </div>
      </div>
    </section>
    <section class='comments'>
      <div class='container'>
        <div class='swiper swiper-comments'>
          <div class='swiper-wrapper'>
            <div class='swiper-slide'>
              <p>“Grand views, parkland location and easy access to downtown make this a great place to stay.“</p>
              <p>– The Weekend Australian</p>
            </div>
            <div class='swiper-slide'>
              <p>“Grand views, parkland location and easy access to downtown make this a great place to stay.“</p>
              <p>– The Weekend Australian</p>
            </div>
            <div class='swiper-slide'>
              <p>“Grand views, parkland location and easy access to downtown make this a great place to stay.“</p>
              <p>– The Weekend Australian</p>
            </div>
          </div>
          <div class='swiper-scrollbar'></div>
        </div>
      </div>
    </section>
    <section class='socials'>
      <h2>Our Socials</h2>
      <div class='icons'>
        <a href='#'><img class='facebook'
                         src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook.svg' alt=''></a>
        <a href='#'><img class='instagram'
                         src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg' alt=''></a>
      </div>
      <div class='swiper swiper-socials'>
        <div class='swiper-wrapper'>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/home-events.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/apartments-1.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/socials-1.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/socials-2.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/socials-3.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/socials-4.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/socials-5.png' alt=''>
          </div>
          <div class='swiper-slide'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/socials-6.png' alt=''>
          </div>
        </div>
      </div>
    </section>
    <?php include 'subscription.php'; ?>
    <?php include 'info.php'; ?>
  </main>

<?php get_footer(); ?>