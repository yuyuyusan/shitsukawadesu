<?php get_header(); ?>

<main class="singleMain">

  <section class="singleNews">
 

    <div class="singleNews__cotntainer">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
          <h2><?php the_title(); ?></h2>
          <div class="singleNews__cotntainerContent"><?php the_content(); ?></div>
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
    </div>

  </section>


</main>

<?php get_footer(); ?>