<div class="l-section">
    <div class="l-container--post">
        <div class="c-article">
            <div class="c-article_inner">
                <div class="c-article_cat">
                    <p class="c-article_cat_title">記事カテゴリ</p>

                    <?php
  $category = get_the_category();
  $cat = $category[0];
?>

<?php
$category = get_the_category();

if (!empty( $category )) { ?>
<ul class="c-article_cat_cont">

<?php
foreach($category as $cat){

echo '<li class="c-article_cat_cont_list"><a class="c-button--cat" href="' . esc_url(get_category_link($cat)) . '"class="c-article_cat_cont_list_link">' . $cat->cat_name . '</a></li>';

} ?>

</ul>
<?php } ?>
                </div>
                <div class="c-article_tag">
                    <p class="c-article_tag_title">記事タグ</p>
                    <?php the_tags( '<ul class="c-article_tag_cont"><li class="c-article_tag_cont_list">', '</li><li class="c-article_tag_cont_list">', '</li></ul>' ); ?>
                </div>
            </div>
        </div>
        <?php
        if (is_page_template('single-post-column.php')): ?>
<?php else: ?>
        <div class="c-author">
            <ul class="c-author_cont">
                <?php
                $sentence_name = get_post_meta(get_the_ID(),'sentence_name', true);
                $sentence_mention = get_post_meta(get_the_ID(),'sentence_mention', true);
                $sentence_link = get_post_meta(get_the_ID(),'sentence_link', true);
                $composition_name = get_post_meta(get_the_ID(),'sentence_name', true);
                $composition_mention = get_post_meta(get_the_ID(),'composition_mention', true);
                $composition_link = get_post_meta(get_the_ID(),'composition_link', true);
                $photograph_name = get_post_meta(get_the_ID(),'photograph_name', true);
                $photograph_mention = get_post_meta(get_the_ID(),'photograph_mention', true);
                $photograph_link = get_post_meta(get_the_ID(),'photograph_link', true);
                ?>
                <li class="c-author_cont_list">取材・文＝<?php echo $sentence_name  ?>（<a href="<?php echo $sentence_link ?>"><?php echo $sentence_mention ?></a>）</li>
                <li class="c-author_cont_list">取材・構成＝<?php echo $composition_name ?>（<a href="<?php echo $composition_link ?>"><?php echo $composition_mention ?></a>）</li>
                <li class="c-author_cont_list">撮影＝<?php echo $photograph_name ?>（<a href="<?php echo $photograph_link ?>"><?php echo $photograph_mention ?></a>）</li>
            </ul>
        </div>
      <?php endif; ?>


    </div>
</div>
