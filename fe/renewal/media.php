<?php
/*
 * Template Name: MEDIA
 */
get_header();

?>

    <div id="pan">
      <a href="index.html">HOME</a>　>　MEDIA
    </div>

    <div class="contents_wrapper">
      <div id="media" class="contents_area">
        <h2>MEDIA</h2>
        <ul id="genre_nav">
          <li class="selected"><a href="">ALL</a></li>
          <li><a href="">MAGAZINE</a></li>
          <li><a href="">WEB</a></li>
          <li><a href="">AWARD</a></li>
          <li><a href="">LECTURE</a></li>
        </ul>

        <?php
          $paged = ($_GET['start']) ? $_GET['start'] : 1;
          $args = array(
            'paged' => $paged,
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => "",
            'orderby' => 'date'
          );
          $wp_query = new WP_Query($args);

          while ($wp_query->have_posts()):
            $wp_query->the_post();
        ?>
        <div class="media_content">
          <div class="content_info"><span class="date"><?= get_the_date(); ?></span> <span class="genre"><?= get_the_category()[0]->name; ?></span></div>
          <h3><?= get_the_title(); ?></h3>
          <p><?= get_the_content(); ?></p>
        </div>
        <?php endwhile; ?>

        <?php
          if (function_exists('pagination')) {
            pagination($wp_query->max_num_pages);
          }
        ?>

        <?php wp_reset_postdata(); ?>
      </div>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
