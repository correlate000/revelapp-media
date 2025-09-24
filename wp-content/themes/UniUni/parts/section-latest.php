<section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title">新着記事</h2>
            <a href="<?php echo home_url(); ?>/latest" class="c-button">新着記事を見る</a>
        </div>
        <div class="c-content--col-3">
        <?php
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
                <div class="c-textArea--col-3_img"><?php the_post_thumbnail(); ?></div>
                <div class="c-textArea--col-3_title"><?php the_title(); ?></div>
                <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
        </a>
            <?php
            endforeach; // ループの終了
            wp_reset_postdata(); // 直前のクエリを復元する
            ?>
        </div>
    </div>
</section>                               
