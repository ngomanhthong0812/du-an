<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thongdev
 */

if (! is_active_sidebar('sidebar-1')) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<div class="sidebar-menu_container">
		<h4>Công trình thi công</h4>
		<?php
		$terms = get_terms(
			array(
				'taxonomy' => 'danh-muc-du-an',
				'hide_empty' => false,
			)
		); ?>

		<div class="sidebar-menu-item">
			<?php
			if (!empty($terms) && !is_wp_error($terms)) {
				foreach ($terms  as $term) {
					echo sprintf('<a href="%s">%s</a>', get_term_link($term), esc_html($term->name));
				}
			}
			?>
		</div>
	</div>

	<div class="sidebar-menu_container">
		<h4>Cẩm nang xây dựng</h4>
		<?php
		$terms = get_terms(
			array(
				'taxonomy' => 'category',
				'hide_empty' => false,
			)
		); ?>

		<div class="sidebar-menu-item">
			<?php
			if (!empty($terms) && !is_wp_error($terms)) {
				foreach ($terms  as $term) {
					if ($term->slug !== 'uncategorized') {
						echo sprintf('<a href="%s">%s</a>', get_term_link($term), esc_html($term->name));
					}
				}
			}
			?>
		</div>
	</div>

</aside><!-- #secondary -->