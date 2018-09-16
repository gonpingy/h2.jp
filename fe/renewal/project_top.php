<?php
/*
 * Template Name: PROJECT
 */
get_header();
?>

    <div id="doors">
      <a href="<?= URL_COLLABORATION_PROJECTS ?>" class="d01"></a><a href="<?= URL_INDEPENDENT_PROJECTS ?>" class="d02"></a>
    </div>
    <div class="contents_wrapper">

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
