<?php get_header();?>

<main>
    <?php get_template_part('parts/section-post-mv');?>
    <section class="l-section--content">
    <div class="l-container--post">
    <div class=" c-head--series">
    <?php 
$taxonomy_slug = "genre";
$taxonomy = get_the_terms($post->ID,$taxonomy_slug);
?>
        <h2 class="c-title--series">連載カテゴリ「<?php echo $taxonomy[0]->name; ?>」</h2>
        <a href="<?php echo get_term_link( $taxonomy[0]->slug, $taxonomy_slug ); ?>" class="c-button--series">連載へ</a>
    </div>
    <div class=" post-contents">
    <?php the_content(); ?>
    </div>
    </div>
    <?php get_template_part('parts/section-article');?>
    <?php get_template_part('parts/section-swiper-series-post');?>
    <?php get_template_part('parts/section-share');?>
    <?php get_template_part('parts/section-post-sns-fixed');?>
    </div>
    </section>
<?php get_template_part('parts/section-page-link');?>
<div class="contents_bottom">
<section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title">連載記事</h2>
        </div>
        <div class="c-content--col-3">
        <?php // 現在表示されている投稿と同じタームに分類された投稿を取得
  $taxonomy_slug = 'genre'; // タクソノミーのスラッグを指定
  $post_type_slug = 'series'; // 投稿タイプのスラッグを指定
  $post_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タクソノミーの指定
  if( $post_terms && !is_wp_error($post_terms)) { // 値があるときに作動
    $terms_slug = array(); // 配列のセット
    foreach( $post_terms as $value ){ // 配列の作成
      $terms_slug[] = $value->slug; // タームのスラッグを配列に追加
    }
  }
  $args = array(
    'post_type' => $post_type_slug, // 投稿タイプを指定
    'posts_per_page' => 3, // 表示件数を指定
    'orderby' =>  'date', // ランダムに投稿を取得
    'order' =>  'desc',
    'post__not_in' => array($post->ID), // 現在の投稿を除外
    'tax_query' => array( // タクソノミーパラメーターを使用
      array(
        'taxonomy' => $taxonomy_slug, // タームを取得タクソノミーを指定
        'field' => 'slug', // スラッグに一致するタームを返す
        'terms' => $terms_slug // タームの配列を指定
      )
    )
  );
  $the_query = new WP_Query($args); if($the_query->have_posts()):
?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="c-textArea--col-3 c-textArea_card">
                <div class="c-textArea--col-3_img"><?php the_post_thumbnail(); ?></div>
                <div class="c-textArea--col-3_title"><?php the_title(); ?></div>
                <div class="c-textArea--col-3_date"><?php the_time('Y/m/d') ?></div>
  </a>
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
        </div>
    </div>
</section>
<?php get_template_part('parts/section-latest');?>
<?php get_template_part('parts/section-suggest');?>
<?php get_template_part('parts/section-rank');?>
</div>
<?php get_template_part('parts/section-breadcrumbs');?>
                </main>

                <?php get_footer();?>