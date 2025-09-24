<div class="p-top_new-and-rank_rank c-content--col-2--right">
  <div class="p-top_new-and-rank_new_top c-head">
    <h2 class="p-top_new-and-rank_new_top_title c-title">人気記事</h2>
    <ul class="tab">
      <li class="tab_new"><a class="tab_new_list" href="#rank-new">新着</a></li>
      <li class="tab_successive"><a class="tab_successive_list" href="#rank-successive">歴代</a></li>
    </ul>
    <a href="<?php echo home_url(); ?>/ranking-latest" class="p-top_new-and-rank_new_top_archive--latest c-button">一覧を見る</a>
    <a href="<?php echo home_url(); ?>/ranking-all" class="p-top_new-and-rank_new_top_archive--all c-button hidden">一覧を見る</a>
  </div>
  <div id="rank-new" class="p-top_new-and-rank_rank_cont area is-active">
    <?php
    $wpp = array (
    'range' => 'weekly',
    'limit' => 5,
    'post_type' => 'series , post',
    'title_length' => '35',
    'category__not_in' => '20',
    'stats_comments' => '0',
    'stats_date' => '1',
    'stats_date_format' => 'Y/m/d',
    'stats_views' => '1',
    'thumbnail_width' => '680',
    'thumbnail_height' => '383',
    'post_html' => '<div class="c-textArea_card c-textArea--col-2 wpp_thumb_wrapper">
      <div class="p-top_new-and-rank_rank_cont_img c-textArea--col-2_img">{thumb}</div>
      <div class="p-top_new-and-rank_rank_cont_card_text c-textArea--col-2_text">
        <p class="p-top_new-and-rank_rank_cont_card_title c-textArea--col-2_text_title">{title}</p>
        <p class="p-top_new-and-rank_rank_cont_card_date c-textArea--col-2_text_date">{date}</p>
      </div>
    </div>',
    ); ?>

    <?php wpp_get_mostpopular($wpp); ?>

  </div>

  <div id="rank-successive" class="p-top_new-and-rank_rank_cont area">
    <?php
    // views post metaで記事のPV情報を取得する
    setPostViews(get_the_ID());
    $i = 1;
    $args = array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'posts_per_page' => 5 // ← 5件取得
    );
    // WP_Queryによるループ
    $query = new WP_Query($args);
    if ($query->have_posts()) :
    while ($query->have_posts()) :
    $query->the_post();
    ?>
    <a href="<?php the_permalink(); ?>" class="c-textArea_card c-textArea--col-2">
      <span class="c-textArea--col-2_number"><?php echo $i++; ?></span>
      <div class="p-top_new-and-rank_rank_cont_img c-textArea--col-2_img"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?></div>
      <div class="p-top_new-and-rank_rank_cont_card_text c-textArea--col-2_text">
        <p class="p-top_new-and-rank_rank_cont_card_title c-textArea--col-2_text_title"><?php the_title(); ?></p>
        <p class="p-top_new-and-rank_rank_cont_card_date c-textArea--col-2_text_date"><?php echo get_the_date('Y/m/d'); ?></p>
        <p><?php echo getPostViews(get_the_ID()); // 記事閲覧回数表示 ?></p>
      </div>
    </a>
    <?php
    endwhile;
    endif;
    wp_reset_postdata();
    ?>

  </div>
</div>
