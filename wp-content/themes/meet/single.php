<?php get_header(); ?>
<div class="main single">
  <div class="container">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="user">
      <?php the_post_thumbnail('hub_carousel_thumbnail'); ?>
      <h1 class="user-name"><?php the_title(); ?></h1>
      <div class="user-info-wrapper">
        <span class="user-age">
          <?php
            $genders = get_the_terms( $post->ID , 'gender' );

            foreach ($genders as $gender) {
              echo $gender->name;
            }

            ?>,
        </span>
        <span class="user-age"><?php the_field('age'); ?> ans</span>
       </div>
      <div class="user-description">
      <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
