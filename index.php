<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae pellentesque ante. Proin quis leo ligula. Integer tempor nisi quis eros vestibulum mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquam consequat libero a viverra. Curabitur id turpis ut ligula hendrerit rutrum sagittis sit amet odio. Sed interdum, lorem ut pharetra sollicitudin, lorem massa ullamcorper ex, a bibendum magna lorem ac velit. Sed vitae efficitur lorem, et blandit diam. Curabitur mollis volutpat massa non ullamcorper. Nam ac justo eget leo cursus consectetur et non augue. Nam malesuada ipsum viverra quam sagittis, viverra dictum augue vestibulum. Praesent nisl felis, venenatis sit amet leo vitae, euismod pellentesque purus. Morbi ac dapibus augue.

Mauris varius ante nibh, eu consequat mi condimentum nec. Sed pharetra felis ex. Nullam aliquam iaculis est non volutpat. Suspendisse at tellus tellus. Curabitur maximus, urna nec sollicitudin pharetra, nisi dolor blandit neque, vitae finibus ex sapien a augue. Donec porta risus a lorem dapibus bibendum. Cras maximus a felis in blandit. Nulla feugiat lorem eget mauris porta facilisis. Nam quis enim nulla. Phasellus convallis eros ac laoreet iaculis. Nulla vulputate vehicula neque sed hendrerit.

Curabitur vestibulum felis id suscipit feugiat. Aliquam bibendum, turpis eu malesuada congue, neque orci imperdiet diam, vel commodo nisi nisi cursus mauris. Donec nec vestibulum erat. Etiam quis magna pulvinar, efficitur ligula eget, feugiat felis. Proin ac lorem purus. Nam nec cursus massa, hendrerit malesuada dolor. Nam massa tellus, pulvinar a ultrices et, euismod quis lorem. Nam mauris odio, pharetra sed orci et, commodo tristique neque. Quisque pellentesque risus sed ligula tincidunt accumsan. Maecenas scelerisque lectus ut risus bibendum venenatis. </p>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
