</main>
<footer>
<div class="social-nav">
    <div class="wrapper flex">
      <?php wp_nav_menu( array(
        'theme_location' => 'social',
        'container_class' => 'social-links',
        'menu_class' => 'social-links__list'
      )); ?>
    </div>
  </div>
</footer>



<?php wp_footer(); ?>
</body>
</html>