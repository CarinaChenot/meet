<?php get_header(); ?>
<div class="main">
  <div class="container">
    <section class="users">
  <?php

    $args = array(
      'post_type' => 'single',
      'posts_per_page' => 6,
      'order_by' => 'date',
      'order' => 'DESC'
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
      while ($the_query->have_posts()) {
        $the_query->the_post();

        if (has_post_thumbnail()) {
    ?>

    <a class="user" href="<?php the_permalink(); ?>" title="Voir profil">
      <?php the_post_thumbnail('hub_carousel_thumbnail'); ?>
      <div class="user-info">
        <div>
          <span class="user-name"><?php the_title(); ?>, </span>
          <span class="user-age"><?php the_field('age'); ?></span>
        </div>
        <span class="user-place">de <?php the_field('location'); ?></span>
      </div>
    </a>

    <?php
        }
      }
      wp_reset_postdata();
    }
  ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
