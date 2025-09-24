
<div class="l-section--swiper-series-post">
    <div class="l-container--post">
    <?php
        // 固定ページに特定のカテゴリーを表示
        $args_feature_banner = array(
            'post_type' => 'feature',
            'post__in' => array(149),
            'posts_per_page' => 1
        );
        $the_query = new WP_Query( $args_feature_banner );
        if ( $the_query->have_posts() ) :
        ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="l-mv_swiper">
            <div class="swiper-container slider_series_post">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <?php if( get_field('feature_link_01') ) { ?>
                    <?php $relational = get_field('feature_link_01'); foreach( (array)$relational as $value) { ?>
                            <a href="<?php echo $value; ?>">
                        <?php } ?>
                    <?php } ?>
                    <?php $img_field_01 = get_field('feature_banner_01'); if($img_field_01){	 ?>
                        <img src="<?php echo esc_url($img_field_01['url']) ?>" alt="<?php echo esc_attr($img_field_01['alt']) ?>">
                        <?php } ?>
                    </a></div>
                    <div class="swiper-slide">
                    <?php if( get_field('feature_link_02') ) { ?>
                    <?php $relational = get_field('feature_link_02'); foreach( (array)$relational as $value) { ?>
                            <a href="<?php echo $value; ?>">
                        <?php } ?>
                    <?php } ?>
                    <?php $img_field_02 = get_field('feature_banner_02'); if($img_field_02){	 ?>
                        <img src="<?php echo esc_url($img_field_02['url']) ?>" alt="<?php echo esc_attr($img_field_02['alt']) ?>">
                        <?php } ?>
                    </a></div>
                    <div class="swiper-slide">
                    <?php if( get_field('feature_link_03') ) { ?>
                    <?php $relational = get_field('feature_link_03'); foreach( (array)$relational as $value) { ?>
                            <a href="<?php echo $value; ?>">
                        <?php } ?>
                    <?php } ?>
                    <?php $img_field_03 = get_field('feature_banner_03'); if($img_field_03){	 ?>
                        <img src="<?php echo esc_url($img_field_03['url']) ?>" alt="<?php echo esc_attr($img_field_03['alt']) ?>">
                        <?php } ?>
                    </a></div>
                    <div class="swiper-slide">
                    <?php if( get_field('feature_link_04') ) { ?>
                    <?php $relational = get_field('feature_link_04'); foreach( (array)$relational as $value) { ?>
                            <a href="<?php echo $value; ?>">
                        <?php } ?>
                    <?php } ?>
                    <?php $img_field_04 = get_field('feature_banner_04'); if($img_field_01){	 ?>
                        <img src="<?php echo esc_url($img_field_04['url']) ?>" alt="<?php echo esc_attr($img_field_04['alt']) ?>">
                        <?php } ?>
                    </a></div>
                    <div class="swiper-slide">
                    <?php if( get_field('feature_link_05') ) { ?>
                    <?php $relational = get_field('feature_link_05'); foreach( (array)$relational as $value) { ?>
                            <a href="<?php echo $value; ?>">
                        <?php } ?>
                    <?php } ?>
                    <?php $img_field_05 = get_field('feature_banner_05'); if($img_field_05){	 ?>
                        <img src="<?php echo esc_url($img_field_05['url']) ?>" alt="<?php echo esc_attr($img_field_05['alt']) ?>">
                        <?php } ?>
                    </a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
    </div>
</div>
