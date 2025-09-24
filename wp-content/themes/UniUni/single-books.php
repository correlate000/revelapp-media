<?php get_header();?>

<main>
  <section class="l-section--post--book">
    <div class="l-container">
      <div class="p-books">
        <div class="p-books-textArea--col-2">
          <?php
          $image = wp_get_attachment_image_src(get_field('books_img'), 'full');
          $img_alt = get_post(get_field('books_img'));
          $alt = get_post_meta( $img_alt->ID, '_wp_attachment_image_alt', true );
          ?>
          <div class="p-books-textArea--col-2_img">
            <a href="<?php the_field('amazon'); ?>" target="_blank" rel=”noopener noreferrer”><img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>"></a></div>
          <div class="p-books-textArea--col-2_cont">
            <p class="p-books-textArea--col-2_cont_title">
              <?php the_title();?>
            </p>
            <dl class="p-books-textArea--col-2_cont_item">
              <?php if( get_field('author') ) { ?>
                <dt>著者</dt>
                <dd><?php the_field('author'); ?></dd>
              <?php } ?>
              <?php if( get_field('publisher') ) { ?>
                <dt>出版社</dt>
                <dd><?php the_field('publisher'); ?></dd>
              <?php } ?>
              <?php if( get_field('release') ) { ?>
                <dt>出版年月日</dt>
                <dd><?php the_field('release'); ?></dd>
              <?php } ?>
            </dl>
            <?php if( get_field('outline') ) { ?>
              <p class="p-books-textArea--col-2_cont_text"><?php the_field('outline'); ?></p>
            <?php } ?>
            <?php if( get_field('amazon') ) { ?>
              <a class="p-books-textArea--col-2_cont_link" href="<?php the_field('amazon'); ?>" target="_blank" rel=”noopener noreferrer”>
                <strong>Amazonで見る</strong>
              </a>
            <?php } ?>

          </div>
        </div>
        <?php if( get_field('comment') ) { ?>
          <dl class="p-books-textArea--col-2_editor">
            <dt>編集者コメント</dt>
            <dd><?php the_field('comment'); ?></dd>
          </dl>
        <?php } ?>

        <?php if( get_field('関連記事_1') ) { ?>

        <div class=" c-head">
          <h2 class="c-title">関連記事</h2>
        </div>
        <div class="c-content--col-3">
          <?php
          $relation_1 = get_field('関連記事_1');
          $relationtitle_1 = $relation_1 -> post_title;
          $relation_2 = get_field('関連記事_2');
          $relationtitle_2 = $relation_2 -> post_title;
          $relation_3 = get_field('関連記事_3');
          $relationtitle_3 = $relation_3 -> post_title;
           ?>

          <a href="<?=get_the_permalink($relation_1->ID)?>" class="c-textArea--col-3 c-textArea_card">
          <div class="c-textArea--col-3_img"><?=get_the_post_thumbnail( $relation_1->ID,'eyecatch')?></div>
          <div class="c-textArea--col-3_title"><?php echo $relationtitle_1; ?></div>
          <div class="c-textArea--col-3_date"><?=get_the_date('Y.m.d',$relation_1->ID);?></div>
          </a>

          <?php if( get_field('関連記事_2') ) { ?>

          <a href="<?=get_the_permalink($relation_2->ID)?>" class="c-textArea--col-3 c-textArea_card">
          <div class="c-textArea--col-3_img"><?=get_the_post_thumbnail( $relation_2->ID,'eyecatch')?></div>
          <div class="c-textArea--col-3_title"><?php echo $relationtitle_2; ?></div>
          <div class="c-textArea--col-3_date"><?=get_the_date('Y.m.d',$relation_2->ID);?></div>
          </a>
        <?php } ?>

          <?php if( get_field('関連記事_3') ) { ?>

          <a href="<?=get_the_permalink($relation_3->ID)?>" class="c-textArea--col-3 c-textArea_card hidden-sp">
          <div class="c-textArea--col-3_img"><?=get_the_post_thumbnail( $relation_3->ID,'eyecatch')?></div>
          <div class="c-textArea--col-3_title"><?php echo $relationtitle_3; ?></div>
          <div class="c-textArea--col-3_date"><?=get_the_date('Y.m.d',$relation_3->ID);?></div>
          </a>
        <?php } ?>

        </div>
      <?php } ?>

      </div>
    </div>
  </section>
  <?php get_template_part('parts/section-share');?>
  <?php get_template_part('parts/section-page-link');?>
  <div class="contents_bottom">
    <?php get_template_part('parts/section-latest');?>
    <?php get_template_part('parts/section-suggest');?>
    <?php get_template_part('parts/section-rank');?>
  </div>
  <?php get_template_part('parts/section-breadcrumbs');?>
</main>

<?php get_footer();?>
