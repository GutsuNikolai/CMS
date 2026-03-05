<?php get_header(); ?>

<main class="container">
  <div class="content">
    <h2>Latest Posts</h2>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="post">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="meta"><?php the_time('d.m.Y'); ?> • <?php the_author(); ?></p>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; ?>

      <div class="pagination">
        <?php the_posts_pagination(); ?>
      </div>

    <?php else : ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>