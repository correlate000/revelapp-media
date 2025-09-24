<?php get_header();?>
<?php
$posts = get_field('関連');
if( $posts ):
 ?>
<h3>オススメ関連記事</h3>
    <ul>
    <?php foreach( $posts as $val ): ?>
        <li>
            <a href="<?php echo get_permalink( $val->ID ); ?>"><?php echo get_the_title( $val->ID ); ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
                <main>
                    <section class="l-section--post">
                        <div class="l-container--full">
                            <div class="p-video">
                                <div class="p-video_youtube">
                                <?php if( get_field('youtube_url') ): ?>
                                    <div class="p-video_youtube_player">
                                    <?php echo $embed_code = wp_oembed_get( get_field('youtube_url') ); ?>
                                    </div>
                                        <?php endif; ?>
                                        <div class="p-video_youtube_caption">
                                        <h1 class="p-video_youtube_caption_title"><?php the_title(); ?></h1>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="local-nav">
                                <ul class="local-nav_wrap">
                                    <li class="local-nav_list"><a href="#"><img src="./assets/img/top-swiper01.jpg" alt=""></a></li>
                                    <li class="local-nav_list"><a href="#"><img src="./assets/img/top-swiper01.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <?php get_template_part('parts/section-page-link');?>
                    <section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title">動画一覧</h2>
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
<?php get_template_part('parts/section-rank');?>
<?php get_template_part('parts/section-breadcrumbs');?>
                </main>

                <?php get_footer();?>