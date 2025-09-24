<div class="l-mv_inner">
<?php
// 固定ページに特定のカテゴリーを表示
$args_suggest = array(
'post_type' => 'suggest',
'post__in' => array(148),
'posts_per_page' => 1
);
$the_query = new WP_Query( $args_suggest );
if ( $the_query->have_posts() ) :
?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php
$posts = get_field('suggest');
if( $posts ):
?>
<div class="l-mv_swiper_wrap">
<?php get_template_part('parts/section-top-mv-sns');?>
<div class="swiper-container slider_fv">
<div class="swiper-wrapper">
<?php foreach( $posts as $val ): ?>
<div class="l-mv_main swiper-slide">
<div class="l-mv_main_img">
  <a href="<?php echo get_permalink( $val->ID ); ?>"><?php echo get_the_post_thumbnail( $val->ID ); ?></a>
</div>
</div>
<?php endforeach; ?>
</div>

<div class="slider_fv_nav_wrapper">
<div class="slider_fv_nav">
<div class="swiper-button-prev"></div>
<div class="swiper-pagination swiper-pagination-fv"></div>
<div class="swiper-button-next"></div>
</div>
</div>
</div>

<div class="l-mv_main_cont">
<p class="l-mv_main_cont_top"><span>ピックアップ！</span></p>


<div class="swiper-container slider_fv_cont">
<div class="swiper-wrapper">
<?php foreach( $posts as $val ): ?>
<div class="swiper-slide">
  <p class="l-mv_main_cont_title"><a href="<?php echo get_permalink( $val->ID ); ?>"><?php echo get_the_title( $val->ID ); ?></a></p>
  <div class="l-mv_main_cont_bottom">
    <?php if (get_post_type( $val ) == 'post'): ?>
      <p class="l-mv_main_cont_bottom_cat"><a href="<?php echo home_url(); ?>/<?php $cat = get_the_category($val); echo $cat[0]->slug; ?>"> <?php $cat = get_the_category($val); echo $cat[0]->name; ?></a></p>
    <?php else : ?>
      <p class="l-mv_main_cont_bottom_cat"><a href="<?php echo home_url(); ?>/<?php echo get_post_type( $val->ID ); ?>"><?php echo esc_html(get_post_type_object(get_post_type($val->ID))->label); ?></a></p>
    <?php endif; ?>
    <p class="l-mv_main_cont_bottom_date"><?php echo get_the_date( 'Y.m.d',$val->ID ); ?> 更新</p>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>


</div>
</div>
</div>
<?php endif;?>

<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
