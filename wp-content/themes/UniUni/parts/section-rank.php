<section class="l-section--rank">
  <div class="l-container">
    <div class="c-head--rank">
      <h2 class="c-title">人気記事</h2>
    </div>
    <div class="c-head">
      <div class="c-title--small">最新ランキング</div>
      <a href="<?php bloginfo('template_url'); ?>/ranking-latest" class="c-button">一覧を見る</a>
    </div>
    <div class="c-content--col-3 c-wpp-list">
      <?php
      $wpp = array (
        'range' => 'weekly',
        'limit' => 3,
        'post_type' => 'series , post',
        'title_length' => '35',
        'stats_comments' => '0',
        'stats_date' => '1',
        'stats_date_format' => 'Y/m/d',
        'stats_views' => '1',
        'thumbnail_width' => '680',
        'thumbnail_height' => '383',
        'post_html' => '<div class="c-textArea_card c-textArea--col-3 wpp_thumb_wrapper">
        <div class="c-textArea--col-3_img">{thumb}</div>
        <div class="c-textArea--col-3_title">{title}</div>
        <div class="c-textArea--col-3_date">{date}</div>
        </div>',
      ); ?>


      <?php wpp_get_mostpopular($wpp); ?>
      <?php
      $args = array(
        'numberposts' => 3,
        'meta_key' => 'pv_count_week',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
          ?>

        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="c-head">
        <div class="c-title--small">歴代ランキング</div>
        <a href="<?php bloginfo('template_url'); ?>/ranking-all" class="c-button">一覧を見る</a>
      </div>

      <div class="c-content--col-3">
        <?php
        $i = 1;
        $args = array(
        'post_type' => array('post', 'series','feature'),
        'exclude' => '149',
        'posts_per_page' => 3 // 表示件数の指定
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ): // ループの開始
        setup_postdata( $post ); // 記事データの取得
        ?>
        <a href="<?php the_permalink(); ?>" class="c-textArea--col-3 c-textArea_card">
          <span class="c-textArea--col-3_number"><?php echo $i++; ?></span>
          <div class="c-textArea--col-3_img"><?php the_post_thumbnail(); ?></div>
          <div class="c-textArea--col-3_title"><?php the_title(); ?></div>
          <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
        </a>
      <?php endforeach; wp_reset_postdata();?>
    </div>
  </div>
</section>
