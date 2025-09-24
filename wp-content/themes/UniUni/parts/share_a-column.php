<?php
$post = get_post( get_the_ID() );
$slug = $post->post_name;
$category = get_the_category();
$cat_slug = $category[0]->category_nicename;
?>
<a href="<?php echo home_url(); ?>/<?php echo $cat_slug; ?>/<?php echo $slug;?>">
