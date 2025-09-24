<section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title"><?php $cat = get_the_category(); echo $cat[0]->name; ?>に関する記事一覧</h2>
        </div>
        <div class="c-content--col-3">
        <?php
  $categories = get_the_category();
  $category_ID = array();
  foreach($categories as $category):
    array_push( $category_ID, $category -> cat_ID);
  endforeach ;
  $args = array(
    'post__not_in' => array($post -> ID),
    'posts_per_page'=> 3,
    'category__in' => $category_ID,
    'orderby' => 'desc',
  );
  $query = new WP_Query($args); 
?>
<?php if( $query -> have_posts() ): while ($query -> have_posts()): $query -> the_post(); ?>
            <a href="<?php the_permalink() ?>" class="c-textArea--col-3 c-textArea_card">
                <div class="c-textArea--col-3_img"><?php echo get_the_post_thumbnail(); ?></div>
                <div class="c-textArea--col-3_title"><?php the_title(); ?></div>
                <div class="c-textArea--col-3_date"><?php echo get_the_date( 'Y.m.d' ); ?></div>
</a>
            <?php endwhile; else:?>
  <p>新着記事はありません。</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>