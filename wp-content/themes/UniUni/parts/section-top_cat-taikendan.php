<section class="p-top_cat l-section--cat">
  <div class="l-container">
    <div class="p-top_cat_top c-head">
      <h2 class="p-top_cat_top_title c-title">体験談・コラム</h2>
      <a href="<?php echo home_url(); ?>/category/column" class="p-top_cat_top_archive c-button">一覧を見る</a>
    </div>

    <?php if( wp_is_mobile()) : ?>
      <!--ここにスマホ・タブレットのときのHTMLコードを記述-->
    <?php else : ?>
      <!--ここにPCの時のHTMLコードを記述-->
      <?php
      $args = [
      'category_name' => 'column',
      'numberposts' => 1
      ];


      // 条件を渡して記事を取得
      $custom_posts = get_posts($args);
      foreach ( $custom_posts as $post ): setup_postdata($post); ?>


      <div class="p-top_cat_cont c-content--col-2--big">
        <a href="<?php the_permalink(); ?>" class="c-textArea_card p-top_cat_cont_left c-content--col-2--big--left c-textArea--col-2--big">
          <div class="p-top_cat_cont_left_img  c-textArea--col-2--big_img"><?php the_post_thumbnail(); ?></div>
          <p class="p-top_cat_cont_left_member  c-textArea--col-2--big_member"><?php the_secondary_title(); ?></p>
          <p class="p-top_cat_cont_left_title  c-textArea--col-2--big_title"><?php the_title(); ?></p>
          <p class="p-top_cat_cont_left_date  c-textArea--col-2--big_date"><?php the_time('Y/m/d') ?></p>
        </a>

      <?php endforeach; ?>
    <?php endif; ?>


    <div class="p-top_cat_cont_right c-content--col-2--big--right">
      <?php if( wp_is_mobile()) : ?>
        <!--ここにスマホ・タブレットのときのHTMLコードを記述-->
        <?php
        $args = [
        'category_name' => 'column',
        'numberposts' => 3
        ];
        ?>
        <?php
        // 条件を渡して記事を取得
        $custom_posts = get_posts($args);
        foreach ( $custom_posts as $post ): setup_postdata($post); ?>
        <div class="p-top_cat_cont_right_card c-textArea--col-2--small">
          <div class="p-top_cat_cont_right_card_img c-textArea--col-2--small_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
          <div class="c-textArea--col-2--small_text">
            <p class="p-top_cat_cont_right_title c-textArea--col-2--small_text_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <p class="p-top_cat_cont_right_date c-textArea--col-2--small_text_date"><?php the_time('Y/m/d') ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <!--ここにPCの時のHTMLコードを記述-->
      <?php
      $args = [
      'category_name' => 'column',
      'numberposts' => 3
      , 'offset' => 1 //表示しない件数
      ];
      ?>
      <?php
      // 条件を渡して記事を取得
      $custom_posts = get_posts($args);
      foreach ( $custom_posts as $post ): setup_postdata($post); ?>
      <a href="<?php the_permalink(); ?>" class="c-textArea_card p-top_cat_cont_right_card c-textArea--col-2--small">
        <div class="p-top_cat_cont_right_card_img c-textArea--col-2--small_img"><?php the_post_thumbnail(); ?></div>
        <div class="c-textArea--col-2--small_text">
          <p class="p-top_cat_cont_right_title c-textArea--col-2--small_text_title"><?php the_title(); ?></p>
          <p class="p-top_cat_cont_right_date c-textArea--col-2--small_text_date"><?php the_time('Y/m/d') ?></p>
        </div>
      </a>
    <?php endforeach; ?>
  <?php endif; ?>

</div>
</div>
</div>
</section>
