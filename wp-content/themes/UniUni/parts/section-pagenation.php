<div class="pagenation">
<?php
if ($the_query->max_num_pages > 1) {
	echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'current' => max(1, $paged),
		'total' => $the_query->max_num_pages,
        'prev_text' => '<',
        'next_text' => '>',
	));
}
?>
</div>