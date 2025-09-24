<?php
$post = get_post( get_the_ID() );
$slug = $post->post_name;
$category = get_the_category();
$cat_slug = $category[0]->category_nicename;
?>
<a class="c-linkBtn_sns_right_list_icon_video" href="<?php echo home_url(); ?>/video/<?php echo $slug; ?>">
