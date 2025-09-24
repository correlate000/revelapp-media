<?php
// 固定ページに特定のカテゴリーを表示
$args_suggest_area = array(
    'post_type' => 'suggest',
    'post__in' => array(166),
    'posts_per_page' => 1
);
$the_query = new WP_Query( $args_suggest_area );
if ( $the_query->have_posts() ) :
?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php
$posts = get_field('suggest_area');
if( $posts ):
?>
<section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title">オススメ記事</h2>
            <a href="#" class="c-button">オススメ記事を見る</a>
        </div>
        <div class="c-content--col-3">
        <?php foreach( $posts as $val ): ?>
            <a href="<?php echo get_permalink( $val->ID ); ?>" class="c-textArea--col-3 c-textArea_card">
                <div class="c-textArea--col-3_img"><?php echo get_the_post_thumbnail( $val->ID ); ?></div>
                <div class="c-textArea--col-3_title"><?php echo get_the_title( $val->ID ); ?></div>
                <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
        </a>
        <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif;?>

<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
