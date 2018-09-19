<?php
/*
 * Template Name: COLLABORATION PROJECTS 詳細
 */
get_header();

$member = [member_last_name(SCF::get('member1'))];

if (SCF::get('member2') != 'なし') {
  $member[] = member_last_name(SCF::get('member2'));
}

$previous = get_previous_page();
$next = get_next_page();

?>

    <div class="contents_wrapper">
      <div id="cp_detail" class="contents_area">
        <div class="date"><?= SCF::get('date') ?></div>
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
            <p><a href="<?= SCF::get('projcet_album') ?>" target="_blank">プロジェクトのアルバムを見る（Facebook） ></a>
          </div>
        </div>
        <ul id="cp_detail_nav">
          <li class="">
            <?php if (!empty($previous)): ?>
            <a href="<?= $previous->guid ?>">＜ PREV</a>
            <?php endif; ?>
          </li>
          <li><a href="<?= URL_COLLABORATION_PROJECTS ?>">一覧へ</a></li>
          <li class="">
            <?php if (!empty($next)): ?>
            <a href="<?= $next->guid ?>">NEXT ></a>
            <?php endif; ?>
          </li>
        </ul>
      </div>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
