<?php
// template for displaying post entries

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>

<div class="item-pic">
	<?php echo '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail( get_the_ID(), 'featured-image' ).'</a>'; ?>
</div>
<div class="item-title">
	<?php echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>'; ?>
</div>
<div class="item-author">
	<?php the_author_posts_link(); ?>
</div>