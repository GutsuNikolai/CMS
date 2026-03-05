<?php
if (post_password_required()) return;
?>

<section class="comments">
  <h3>Comments</h3>

  <?php if (have_comments()) : ?>
    <ul class="comment-list">
      <?php wp_list_comments(); ?>
    </ul>

    <div class="comment-pagination">
      <?php paginate_comments_links(); ?>
    </div>
  <?php else : ?>
    <p>No comments yet.</p>
  <?php endif; ?>

  <?php comment_form(); ?>
</section>