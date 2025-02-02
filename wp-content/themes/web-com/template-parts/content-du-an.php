<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thongdev
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="d-flex gap-4 mt-4 du-an-item">
		<?php web_com_post_thumbnail(); ?>
		<div class="entry-content-container">
			<header class="entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				if ('post' === get_post_type()) :
				?>
					<div class="entry-meta">
						<?php
						web_com_posted_on();
						web_com_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
				$post = get_post();
				echo get_the_excerpt($post);
				?>
			</div><!-- .entry-content -->
			<button class="btn-submit"><a href="<?php echo esc_url(get_permalink()) ?>" rel="bookmark">Xem thêm</a></button>
		</div>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->