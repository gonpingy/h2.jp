<?php
/*
 * Template Name: COLLABORATION PROJECTS 詳細
 */
get_header();

$member = [SCF::get('member1')];

if (!empty(SCF::get('member2'))) {
  $member[] = SCF::get('member2');
}

$previous = get_previous_page();
$next = get_next_page();
?>

    <div class="contents_wrapper">
      <div id="cp_detail" class="contents_area">
        <div class="date">?= SCF::get('date') ?></div>
        <h3><?= get_the_title() ?></h3>
        <div id="copy"><?= SCF::get('copy') ?></div>
        <div id="cp_member">担当：<?= implode('・', $member) ?></div>
        <div id="article">
          <?php foreach (SCF::get('本文') as $i => $group): ?>
          <?= $group['article'] ?>
          <?php endforeach; ?>
        </div>
        <div id="cp_info">
          <h3>ABOUT PROJECT</h3>
          <div id="cp_info_d">
            <?= SCF::get('about_project') ?>
            <p><a href="<?= SCF::get('projcet_album') ?>">プロジェクトのアルバムを見る（Facebook） ></a>
          </div>
        </div>
        <ul id="cp_detail_nav">
          <?php if (!empty($previous)): ?>
          <li class=""><a href="<?= $previous->guid ?>">＜ PREV</a></li>
          <?php endif; ?>
          <li><a href="<?= URL_COLLABORATION_PROJECTS ?>">一覧へ</a></li>
          <?php if (!empty($next)): ?>
          <li class=""><a href="<?= $next->guid ?>">NEXT ></a></li>
          <?php endif; ?>
        </ul>
      </div>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
