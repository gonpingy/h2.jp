<?php
/*
 * Template Name: 404 NOT FOUND
 */
get_header();
?>

    <div class="contents_wrapper">
      <div id="nf_notice" class="contents_area">
      <h2>404 NOT FOUND</h2>
      <p>
        お探しのページは存在しません。<br>
        <a href="<?= URL_TOP ?>" style="text-decoration:underline;">HandiHouse project トップページへ移動する</a>
      </p>
    </div>
      </div>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
