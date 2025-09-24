<section class="l-section--page-link">
    <div class="l-container--full--border">
        <div class="c-page-link_wrap">
            <ul class="c-page-link">
                <li class="c-page-link_list prev">
                <?php if (get_previous_post()):?>
                <?php previous_post_link('%link', '前の記事へ'); ?>
                <?php endif; ?>
                </li>
                <?php if (get_post_type() == 'post'): ?>
                    <li class="c-page-link_list"><a class="c-page-link_list_archive" href="<?php echo home_url(); ?>/latest; ?>">一覧へ戻る</a></li>
                <?php else : ?>
                <li class="c-page-link_list"><a class="c-page-link_list_archive" href="<?php echo home_url(); ?>/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>">一覧へ戻る</a></li>
                <?php endif; ?>
                <li class="c-page-link_list next">
                <?php if (get_next_post()):?>
                <?php next_post_link('%link', '次の記事へ'); ?>
                <?php endif; ?>
                </li>
               
            </ul>
        </div>
    </div>
</section>