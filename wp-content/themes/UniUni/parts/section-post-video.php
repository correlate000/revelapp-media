<div class="fixed-cover">
<?php get_template_part('parts/section-post-sns');?>
    <section class="l-section--post">
        <div class="l-container--post">
            <div class="c-post_mv">
                <div class="p-video_youtube">
                    <div class="p-video_youtube_player">
                    <img class="p-video_youtube_thumb"
                src="<?php the_post_thumbnail_url( '' ); ?>"
                alt="<?php the_title(); ?>"/>
                <img class="p-video_youtube_btn"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/post_youtube_thumb_mask.svg"
                alt="動画再生ボタン"
                />
                <iframe
                src="<?php the_field('youtube_url'); ?>?enablejsapi=1&mute=1"
                frameborder="0"
                allowfullscreen
                autoplay=1
                playsinline=0
                class="movie"
                ></iframe>
                    </div>
                </div>
                <div class="c-post_cont">
                    <p class="c-post_cont_sub c-title--sub--orange"><?php the_secondary_title(); ?></p>
                    <h1 class="c-post_cont_title c-title--middle"><?php the_title(); ?></h1>
                    <div class="c-post_cont_row">
                        <p class="c-post_cont_row_date"><?php echo get_the_date('Y/m/d'); ?></p>
                        <ul class="c-post_cont_row_cat">
                            <li class="c-post_cont_row_cat_list"><a href="#"></a></li>
                            <li class="c-post_cont_row_cat_list"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="youtube">


            </div>

<?php
  $category = get_the_category();
  $cat = $category[0];
?>

<?php
$category = get_the_category();

if (!empty( $category )) { ?>
<ul class="c-post_cont_row_cat">

<?php
foreach($category as $cat){

echo '<li class="c-post_cont_row_cat_list"><a class="c-button--cat"href="' . esc_url(get_category_link($cat)) . '">' . $cat->cat_name . '</a></li>';

} ?>

</ul>
<?php } ?>
            </div>
        </div>
    </section>
