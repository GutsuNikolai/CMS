<aside class="sidebar">
  <h3>Sidebar</h3>

  <section class="widget">
    <h4>Search</h4>
    <?php get_search_form(); ?>
  </section>

  <section class="widget">
    <h4>Recent Posts</h4>
    <ul>
      <?php
        $recent = wp_get_recent_posts(['numberposts' => 5]);
        foreach ($recent as $p) {
          echo '<li><a href="' . get_permalink($p['ID']) . '">' . esc_html($p['post_title']) . '</a></li>';
        }
      ?>
    </ul>
  </section>
</aside>