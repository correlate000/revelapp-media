<?php
/*
Template Name: 対談
Template Post Type: post
*/
?>

<?php get_header();?>

                <main>
                    <section class="l-section--post">
                        <div class="l-container--narrow">
                            <div class="p-column">
                                <div class="p-column_img"><?php the_post_thumbnail(); ?></div>
                                <p class="p-column_sub c-title--sub--orange"><?php the_secondary_title(); ?></p>
                                <h1 class="p-column_title c-title--big"><?php the_title(); ?></h1>

                                <div class="p-column_row">
                                    <p class="p-column_row_cat"><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></p>
                                    <p class="p-column_row_date"><?php echo get_the_date('Y.m.d'); ?></p>
                                </div>
                            </div>


                              <?php the_content(); ?>
                            <!-- <div class="p-column_text">
                                本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト
                            </div>
                            <div class="p-column_img"><img src="./assets/img/col-1-img.jpg" alt=""></div>
                            <h2 class="p-column_sub c-title--sub--bgGray"><?php the_secondary_title(); ?></h2>
                            <div class="p-column_text">
                                本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト
                            </div>
                            <div class="p-column_quote c-quote">
                                “引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア引用エリア”
                            </div>
                            <h2 class="p-column_sub c-title--sub--bgGray"><?php the_secondary_title(); ?></h2>
                            <div class="p-column_text">
                                本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト本文ダミーテキスト
                            </div> -->
                        </div>
                    </section>
                    <?php get_template_part('parts/section-page-link');?>
                    <section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title">同一カテゴリ一覧</h2>
        </div>
        <div class="c-content--col-3">
        <?php
// 同じカテゴリから記事を10件呼び出す
$categories = get_the_category($post->ID);

$category_ID = array();

foreach($categories as $category):
	array_push( $category_ID, $category -> cat_ID);
endforeach ;

$args = array(
	// 今読んでいる記事を除く
	'post__not_in' => array($post -> ID),
	'posts_per_page'=> 3,
	'category__in' => $category_ID,
	// ランダムに記事を選ぶ
	'orderby' => 'DESC',
);
$query = new WP_Query($args);
if( $query -> have_posts() ):
	while ($query -> have_posts()) :
	$query -> the_post();
?>
<div class="c-textArea--col-3">
    <div class="c-textArea--col-3_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
    <div class="c-textArea--col-3_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
</div>
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer();?>
        </div>
    </div>
</section>
                    <section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title">新着記事</h2>
            <a href="latest.html" class="c-button">新着記事を見る</a>
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
<?php get_template_part('parts/section-suggest');?>
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
<?php get_template_part('parts/section-breadcrumbs');?>
                </main>

                <?php get_footer();?>
