<div class="fixed-cover">
<?php get_template_part('parts/section-post-sns');?>
    <section class="l-section--post">
        <div class="l-container--post">

            <div class="c-post_mv">
                <div class="c-post_mv_img"><?php the_post_thumbnail(); ?></div>
                <p class="c-post_cont_sub c-title--sub--orange"><?php the_secondary_title(); ?></p>
                <h1 class="c-post_cont_title c-title--big"><?php the_title(); ?></h1>
                <div class="c-post_cont_row">
                    <p class="c-post_cont_row_date"><?php echo get_the_date('Y/m/d'); ?></p>

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
        </div>
    </section>
