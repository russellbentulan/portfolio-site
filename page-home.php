<?php /* Template Name: Home */ ?>

<?php get_header();  ?>

<div class="wrapper">

  <section class="page-content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2 class="page-title--home">
        <?php the_title(); ?>
      </h2>
      
      <div class="content-container">
        <?php the_content(); ?>
      </div>

    <?php endwhile; // end the loop?>
  </section> <!-- /,content -->

</div>

<?php get_footer(); ?>