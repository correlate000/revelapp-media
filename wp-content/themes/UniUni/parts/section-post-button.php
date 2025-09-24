<section class="l-section--post">
    <div class="l-container c-post_sns_wrap">
        <div class="c-post_sns_left">
            <ul class="c-post_sns_list">
                <li class="c-post_sns_left_list_icon"><a href="#"><span class="c-post_sns_left_list_icon_twitter"></span></a></li>
                <li class="c-post_sns_left_list_icon"><a href="#"><span class="c-post_sns_left_list_icon_facebook"></span></a></li>
                <li class="c-post_sns_left_list_icon"><a href="#"><span class="c-post_sns_left_list_icon_line"></span></a></li>
            </ul>
        </div>
        <div class="c-post_mv">
            <div class="p-column_img"><?php the_post_thumbnail(); ?></div>
        </div>
        <div class="c-post_sns_right">
        <ul class="c-post_sns_right_list">
            <li class="c-post_sns_right_list_icon"><span class="c-post_sns_right_list_icon_youtube_disabled"></li>
            <li class="c-post_sns_right_list_icon"><a href="#"><span class="c-post_sns_right_list_icon_voicy"></span></a></li>
            <li class="c-post_sns_right_list_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post_column.svg" alt=""></li>
        </ul>
    </div>
        <div class="c-post_cont">
            <p class="c-post_cont_sub c-title--sub--orange"><?php the_secondary_title(); ?></p>
            <h1 class="c-post_cont_title c-title--big"><?php the_title(); ?></h1>
            <div class="c-post_cont_row">
                <p class="c-post_cont_row_date"><?php echo get_the_date('Y/m/d'); ?></p>
                <ul class="c-post_cont_row_cat">
                    <li class="c-post_cont_row_cat_list"><a href="<?php echo home_url(); ?>/category/<?php $category = get_the_category(); $cat_slug = $category[0]->slug; echo $cat_slug; ?>"><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></a></li>
                </ul>
            </div>
            <ul class="local-nav_wrap center">
                <li class="local-nav_list"><a href="#">音声 で聞きたい方はこちら</a></li>
            </ul>
            