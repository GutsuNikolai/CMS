<?php get_header(); ?>

<main class="container">
  <div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="page">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>

      <?php comments_template(); ?>
    <?php endwhile; endif; ?>
  </div>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>