<section class='subscription'>
  <img class='back' src='<?php echo get_template_directory_uri(); ?>/assets/img/subscription-back.jpg' alt='' />
  <div class='content'>
    <h2><?php echo get_field('subscription_title') ?></h2>
    <p><?php the_field('subscription_subtitle') ?></p>
    <?= do_shortcode('[contact-form-7 id="63" title="Untitled"]'); ?>
  </div>
</section>