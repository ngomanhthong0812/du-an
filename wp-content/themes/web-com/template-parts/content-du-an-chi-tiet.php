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
	<div class="row">
		<div style="width: 38%;">
			<header class="entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title detail-title">', '</h1>');
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
			<div class="detail-info">
				<nav>
					<ul>
						<li>Địa chỉ: <?php echo get_field('dia-chi', get_the_ID()) ?></li>
						<li>Diện tích đất: <?php echo get_field('dien-tich-dat', get_the_ID()) ?></li>
						<li>Diện tích xây dựng: <?php echo get_field('dien-tich-xay-dung', get_the_ID()) ?></li>
						<li>Chi phí:<?php echo get_field('chi-phi', get_the_ID()) ?></li>
					</ul>
				</nav>
			</div>
			<div class="detail-contact">
				Nếu quý khách có nhu cầu về các công trình của Lavihouse, quý khách vui lòng liên hệ số điện thoại 0934 819 091 – 0784 666 456 để được hỗ trợ tốt nhất
			</div>
			<div class="d-flex flex-column">
				<a href="#"><button class="btn-submit-advise">Đăng ký tư vấn thiết kế (miễn phí)</button></a>
				<a href="#"><button class="btn-submit-learn">Tìm hiểu dịch vụ thi công trọn gói</button></a>
			</div>
		</div>
		<div style="width: 62%;"><?php web_com_post_thumbnail(); ?> </div>
	</div>

	<div class="row pt-5">
		<div class="col-3">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-9" style="padding-left: 30px;">
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'web-com'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'web-com'),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div>
	</div>

	<footer class="entry-footer">
		<?php web_com_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->