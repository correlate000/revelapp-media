<?php
/**
 * Template Name: 新着記事一覧 */
?>

<?php get_header(); ?>

<main id="archive">
    <section class="l-section">
        <div class="l-container">
            <div class=" c-head">
                <h2 class="c-title">新着記事一覧</h2>
            </div>
            <div class="c-content--col-3">
            <div class="c-content--col-3">
        <?php
        $args = array(
            'posts_per_page' => 24 // 表示件数の指定
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ): // ループの開始
        setup_postdata( $post ); // 記事データの取得
        ?>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
        <div class="c-textArea--col-3_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <?php
            endforeach; // ループの終了
            wp_reset_postdata(); // 直前のクエリを復元する
            ?>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
    <div class="c-textArea--col-3">
        <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
        <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
    </div>
</div>

<ul class="Pagination">
    <li class="Pagination__previous disabled"><a tabindex="0" role="button" aria-disabled="true" aria-label="Previous page" rel="prev">Previous</a></li>
    <li class="Pagination__link selected"><a role="button" tabindex="0" aria-label="Page 1 is your current page" aria-current="page">1</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0" aria-label="Page 2">2</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0" aria-label="Page 3">3</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0" aria-label="Page 4">4</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0">…</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0" aria-label="Page 95">95</a></li>
    <li class="Pagination__next"><a tabindex="0" role="button" aria-disabled="false" aria-label="Next page" rel="next">Next</a></li>
</ul>
                        </div>
                    </section>
                    <section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title">オススメ記事</h2>
            <a href="#" class="c-button">オススメ記事を見る</a>
        </div>
        <div class="c-content--col-3">
            <div class="c-textArea--col-3">
                <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
            </div>
            <div class="c-textArea--col-3">
                <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
            </div>
            <div class="c-textArea--col-3">
                <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
            </div>
        </div>
    </div>
</section>
                    <section class="l-section--rank">
    <div class="l-container">
        <div class="c-head--rank">
            <h2 class="c-title">ランキング</h2>
            <ul class="tab--rank">
                <li class="tab--rank_new"><a class="tab--rank_new_list" href="#archive-rank-new">新着</a></li>
                <li class="tab--rank_successive"><a class="tab--rank_successive_list" href="#archive-rank-successive">歴代</a></li>
            </ul>
        </div>
        <div id="archive-rank-new" class="area--rank is-active">
            <div class="c-content--col-3">
                <div class="c-textArea--col-3">
                    <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                    <div class="c-textArea--col-3_title"><a href="">ssメインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                    <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
                </div>
                <div class="c-textArea--col-3">
                    <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                    <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                    <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
                </div>
                <div class="c-textArea--col-3">
                    <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                    <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                    <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
                </div>
            </div>
        </div>
        <div id="archive-rank-successive" class="area--rank">
            <div class="c-content--col-3">
                <div class="c-textArea--col-3">
                    <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                    <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                    <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
                </div>
                <div class="c-textArea--col-3">
                    <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                    <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                    <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
                </div>
                <div class="c-textArea--col-3">
                    <div class="c-textArea--col-3_img"><a href=""><img src="./assets/img/col-3-img.jpg" alt=""></a></div>
                    <div class="c-textArea--col-3_title"><a href="">メインタイトルメインタイトルメインタイトルメインタイトル</a></div>
                    <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
                </div>
            </div>
        </div>
        <a href="ranking.html" class="c-button--rank">ランキングを見る</a>
    </div>
</section>
                    <section class="l-section--breadcrumbs">
    <div class="l-container--breadcrumbs">
        <ol class="c-breadcrumbs">
            <li class="c-breadcrumbs_item">
                    <a href="#">ホーム</a>
                </li>
            <li class="c-breadcrumbs_item">
                    <a href="#">カテゴリ名</a>
                </li>
                </ol>
    </div>
</section>
                </main>

                <?php get_footer(); ?>