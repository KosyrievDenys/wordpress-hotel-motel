<?php get_header(); ?>

  <main class='home'>
    <section class='banner'>
      <div class='back'>
        <img src='<?php echo get_field('banner_back') ?>' alt='' />
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
                  $icon = get_sub_field('find_us_icon');
                  $contact = get_sub_field('find_us_contacts');
                  ?>
                  <li>
                    <img src='<?php echo $icon ?>' alt=''>
                    <p><?php echo $contact ?></p>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
          <div class='facilities'>
            <div class='content'>
              <h2><?php echo get_field('welcome_subtitle_2') ?></h2>
              <div class='facilities-wrapper'>
                <?php if (have_rows('list_facilities')): ?>
                  <ul class="slides">
                    <?php while (have_rows('list_facilities')): the_row();
                      $icon = get_sub_field('facilities_icon');
                      $info = get_sub_field('facilities_info');
                      ?>
                      <li>
                        <img src='<?php echo $icon ?>' alt=''>
                        <p><?php echo $info ?></p>
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
        <?php if (have_rows('rooms_slider')): ?>
          <div class='swiper-wrapper'>
            <?php while (have_rows('rooms_slider')): the_row();
              $photo = get_sub_field('rooms_photo');
              $title = get_sub_field('rooms_title');
              $description = get_sub_field('rooms_description');
              ?>
              <div class='swiper-slide'>
                <img class='img-room' src='<?php echo $photo ?>' alt=''>
                <div class='link'>
                  <a href='#'>
                    <h3><?php echo $title ?></h3>
                    <img class='img-right-arrow'
                         src=''
                         alt=''>
                  </a>
                  <p><?php echo $description ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <div class="swiper-pagination"></div>
        <div class="swiper-btn swiper-button-prev"></div>
        <div class="swiper-btn swiper-button-next"></div>
      </div>
    </section>
    <section class='restaurants-and-bars'>
      <div class='swiper swiper-restaurants'>
        <div class='container'>
          <h2><?php echo get_field('restaurant_and_bars_title') ?></h2>
        </div>
        <?php if (have_rows('restaurants_and_bars_slider')): ?>
          <div class='swiper-wrapper'>
            <?php while (have_rows('restaurants_and_bars_slider')): the_row();
              $photo = get_sub_field('restaurants_and_bars_photo');
              $title = get_sub_field('restaurants_and_bars_title');
              $description = get_sub_field('restaurants_and_bars_description');
              ?>
              <div class='swiper-slide'>
                <img src='<?php echo $photo ?>' alt=''>
                <div>
                  <h3><?php echo $title ?></h3>
                  <p><?php echo $description ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <div class="swiper-btn swiper-button-prev"></div>
        <div class="swiper-btn swiper-button-next"></div>
        <div class='swiper-scrollbar'></div>
      </div>
    </section>
    <section class='events'>
      <div class='container'>
        <img class='back' src='<?php echo get_field('events_back') ?>' alt=''>
        <div class='block-content'>
          <div class='content'>
            <h2><?php echo get_field('events_title') ?></h2>
            <p class='description'>`
              <?php echo get_field('events_description') ?>
            </p>
            <img class='img' src='<?php echo get_field('events_back') ?>' alt=''>
            <?php if (have_rows('list_events')): ?>
              <ul class="slides">
                <?php while (have_rows('list_events')): the_row();
                  $private_dining = get_sub_field('private_dining');
                  $private_dining_2 = get_sub_field('private_dining_2');
                  $weddings = get_sub_field('weddings');
                  ?>
                  <li>
                    <p><?php echo $private_dining ?></p>
                  </li>
                  <li>
                    <p><?php echo $private_dining_2 ?></p>
                  </li>
                  <li>
                    <p><?php echo $weddings ?></p>
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
          <?php if (have_rows('offers_and_promotions_sidebar')): ?>
            <div class='swiper-wrapper'>
              <?php while (have_rows('offers_and_promotions_sidebar')): the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $price = get_sub_field('price');
                ?>
                <div class='swiper-slide'>
                  <img class='back' src='<?php echo $image ?>' alt=''>
                  <div class='content'>
                    <div class='swiper-pagination'></div>
                    <h3><?php echo $title ?></h3>
                    <p><?php echo $description ?></p>
                    <a class='btn'>
                      <span><?php echo $price ?></span>
                    </a>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <div class="swiper-btn swiper-button-prev"></div>
          <div class="swiper-btn swiper-button-next"></div>
        </div>
      </div>
    </section>
    <section class='comments'>
      <div class='container'>
        <div class='swiper swiper-comments'>
          <?php if (have_rows('comments_sidebar')): ?>
            <div class='swiper-wrapper'>
              <?php while (have_rows('comments_sidebar')): the_row();
                $comment = get_sub_field('comment');
                $autor = get_sub_field('autor');
                ?>
                <div class='swiper-slide'>
                  <p><?php echo $comment ?></p>
                  <p><?php echo $autor ?></p>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
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