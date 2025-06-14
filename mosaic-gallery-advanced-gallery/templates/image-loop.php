<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	if($migy_masonry_layout == 'yes'){
		$migy_gallery_item_class = 'migy-masonry-gallery-item';
	} else {
		$migy_gallery_item_class = 'migy-grid-gallery-item';
	}

	$migy_item_meta_class = '';
	if($display_image_description == 'yes' && !empty($image_description)){
		$migy_item_meta_class = 'migy-item-meta-with-description';
	}

	// new 
	$migy_hover_effect = !empty(get_post_meta($id, 'migy_hover_effect', true)) ? get_post_meta($id, 'migy_hover_effect', true) : 'none';
	$migy_gallery_padding = !empty(get_post_meta($id, 'migy_gallery_padding', true)) ? intval(get_post_meta($id, 'migy_gallery_padding', true)) : 15;
?>
<div class="migy-gallery-item <?php echo esc_attr($migy_gallery_item_class); ?> <?php echo esc_attr($filter_categories); ?> migy-hover-<?php echo esc_attr($migy_hover_effect); ?>" style="padding: <?php echo esc_attr($migy_gallery_padding); ?>px;">
	<img src="<?php echo esc_url($image_url) ?>" alt="<?php echo esc_html($image_title); ?>">
	<?php if($display_image_title == 'yes' && !empty($image_title)): ?>
	<div class="migy-item-meta <?php echo esc_attr($migy_item_meta_class); ?>">
		<?php if($display_image_title == 'yes' && !empty($image_title)): ?>
		<h2 class="migy-image-title"><?php echo esc_html($image_title); ?></h2>
		<?php endif; ?>
		
		<?php if($display_image_description == 'yes' && !empty($image_description)): ?>
		<p class="migy-image-description"><?php echo esc_html($image_description); ?></p>
		<?php endif; ?>
	</div>
	<?php endif; ?>
</div>