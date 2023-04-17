<section class='info'>
  <div class='container'>
    <div class='wrapper'>
      <?php if (get_field('info_logo')): ?>
        <img src="<?php the_field('info_logo'); ?>" />
      <?php endif; ?>
      <?php if (have_rows('info_list')): ?>
        <ul class="slides">
          <?php while (have_rows('info_list')): the_row();
            $item_1 = get_sub_field('item_1');
            $item_2 = get_sub_field('item_2');
            $item_3 = get_sub_field('item_3');
            $item_4 = get_sub_field('item_4');
            ?>
            <li>
              <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/info-1.svg' alt=''>
              <p><?php echo $item_1 ?></p>
            </li>
            <li>
              <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/info-2.svg' alt=''>
              <p><?php echo $item_2 ?></p>
            </li>
            <li>
              <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/info-3.svg' alt=''>
              <p><?php echo $item_3 ?></p>
            </li>
            <li>
              <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/info-4.svg' alt=''>
              <p><?php echo $item_4 ?></p>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</section>