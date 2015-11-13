

<?php get_header(); ?>
<div id="main">
<div id="content">
<h1>My Boring Posts</h1>
<h3>be careful</h3>

<?php
function writeMsg() {
    echo "<h2>The Newest Posts  </h2><br>";
}

writeMsg(); // call the function
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>













</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>

<?php rewind_posts(); ?>

<?php

$args = array( 'post_type' => 'portfolio_item', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

the_title(); 
echo '<div class="entry-content">';
the_content();
echo '</div>';

endwhile;

?>




