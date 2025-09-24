<div class="p-top_new-and-rank_new c-content--col-2--left">
  <div class="p-top_new-and-rank_new_top c-head">
    <h2 class="p-top_new-and-rank_new_top_title c-title">新着記事</h2>
    <a href="<?php bloginfo('template_url'); ?>/latest" class="p-top_new-and-rank_new_top_archive c-button">一覧を見る</a>
  </div>
  <div class="p-top_new-and-rank_new_cont">
    <?php
    $args = array(
      'post_type' => array('post', 'series','feature'),
      'exclude' => array('149'),
      'posts_per_page' => 5 // 表示件数の指定
    );
    $posts = get_posts( $args );
    foreach ( $posts as $post ): // ループの開始
      setup_postdata( $post ); // 記事データの取得
      ?>
      <a class="c-textArea_card c-textArea--col-2" href="<?php the_permalink(); ?>">
        <div class="p-top_new-and-rank_new_cont_img c-textArea--col-2_img"><?php the_post_thumbnail(); ?></div>
        <div class="p-top_new-and-rank_new_cont_card_text c-textArea--col-2_text">
          <p class="p-top_new-and-rank_new_cont_card_title c-textArea--col-2_text_title"><?php the_title(); ?></p>
          <p class="p-top_new-and-rank_new_cont_card_date c-textArea--col-2_text_date"><?php echo get_the_date('Y/m/d'); ?></p>
        </div>
      </a>
      <?php
    endforeach; // ループの終了
    wp_reset_postdata(); // 直前のクエリを復元する
    ?>
  </div>
</div>
