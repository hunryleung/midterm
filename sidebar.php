<div id="sidebar">
<h2 ><?php _e('Boring'); ?></h2>

<ul>
<?php wp_list_categories( $orderby ); ?> 
</ul>

<h2 ><?php _e('Dont Read'); ?></h2>
<ul >
<?php wp_get_archives('type=daily'); ?>
</ul>
</div>
