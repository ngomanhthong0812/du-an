<?php

/**
 * Template name: Trang chu
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thongdev
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	echo do_shortcode('[smartslider3 slider="2"]');
	?>
	<div class="line"></div>
	<div class="introduce">
		<div class="container_body">
			<div class="col-md-6 introduce-img">
				<?php
				$page_id = 11;
				$thubnail = get_the_post_thumbnail($page_id, 'full');

				if ($thubnail) {
					echo $thubnail;
				} else {
					echo "Trang này không có ảnh đại diện";
				}
				?>
			</div>
			<div class="col-md-6 d-flex flex-column align-items-start justify-content-start">
				<?php
				$page_id = 11;
				$post11 = get_post($page_id);
				?>

				<b class="introduce_title"><?php echo $post11->post_title ?></b>
				<?php
				if ($post11) {
					$excerpt = '<span class="introduce_content">' . get_the_excerpt($post11) . '<span/>';
					echo $excerpt;
				} else {
					echo "Giới thiệu";
				}
				?>
			</div>
		</div>
	</div>

	<div class="interest_container">
		<div class="container_body flex-column">
			<h1><span>Giá trị Chúng tôi</span> sẽ mang đến cho bạn!​</h1>
			<span></span>
			<p>Mang trên mình sứ mệnh "Với LAVI House -Bạn trao cho chúng tôi niềm tin còn chúng tôi dành hết
				tâm huyết cho ngôi nhà của bạn và trao trả cho bạn sự hài lòng"
			</p>
			<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" style="fill:#e06d0f; margin: 5px 0 50px 0;" viewBox=" 0 0 448 512">
				<path d="M224 0c17.7 0 32 14.3 32 32l0 30.1 15-15c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-49 49 0 70.3 61.4-35.8 17.7-66.1c3.4-12.8 16.6-20.4 29.4-17s20.4 16.6 17 29.4l-5.2 19.3 23.6-13.8c15.3-8.9 34.9-3.7 43.8 11.5s3.8 34.9-11.5 43.8l-25.3 14.8 21.7 5.8c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17l-67.7-18.1L287.5 256l60.9 35.5 67.7-18.1c12.8-3.4 26 4.2 29.4 17s-4.2 26-17 29.4l-21.7 5.8 25.3 14.8c15.3 8.9 20.4 28.5 11.5 43.8s-28.5 20.4-43.8 11.5l-23.6-13.8 5.2 19.3c3.4 12.8-4.2 26-17 29.4s-26-4.2-29.4-17l-17.7-66.1L256 311.7l0 70.3 49 49c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-15-15 0 30.1c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-30.1-15 15c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l49-49 0-70.3-61.4 35.8-17.7 66.1c-3.4 12.8-16.6 20.4-29.4 17s-20.4-16.6-17-29.4l5.2-19.3L48.1 395.6c-15.3 8.9-34.9 3.7-43.8-11.5s-3.7-34.9 11.5-43.8l25.3-14.8-21.7-5.8c-12.8-3.4-20.4-16.6-17-29.4s16.6-20.4 29.4-17l67.7 18.1L160.5 256 99.6 220.5 31.9 238.6c-12.8 3.4-26-4.2-29.4-17s4.2-26 17-29.4l21.7-5.8L15.9 171.6C.6 162.7-4.5 143.1 4.4 127.9s28.5-20.4 43.8-11.5l23.6 13.8-5.2-19.3c-3.4-12.8 4.2-26 17-29.4s26 4.2 29.4 17l17.7 66.1L192 200.3l0-70.3L143 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l15 15L192 32c0-17.7 14.3-32 32-32z" />
			</svg>
			<div class="row">
				<div class="col-3">
					<?php
					$field_value = get_field('widget1', get_the_ID()); //get_the_ID(); => Lấy ID của bài viết hoặc trang hiện tại
					if ($field_value) {
						echo $field_value;
					}
					?>
				</div>
				<div class="col-3">
					<?php
					$field_value = get_field('widget2', get_the_ID()); //get_the_ID(); => Lấy ID của bài viết hoặc trang hiện tại
					if ($field_value) {
						echo $field_value;
					}
					?>
				</div>
				<div class="col-3">
					<?php
					$field_value = get_field('widget3', get_the_ID()); //get_the_ID(); => Lấy ID của bài viết hoặc trang hiện tại
					if ($field_value) {
						echo $field_value;
					}
					?>
				</div>
				<div class="col-3">
					<?php
					$field_value = get_field('widget4', get_the_ID()); //get_the_ID(); => Lấy ID của bài viết hoặc trang hiện tại
					if ($field_value) {
						echo $field_value;
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="procedure_container">
		<div class="procedure_container-title bg-white">
			<div class="container_body flex-column">
				<h1><span>Quy trình tư vấn thiết kế</span> và thi công nhà​</h1>
				<span style="width: 400px;"></span>
				<p> Mang trên mình sứ mệnh "Với LAVI HOUSE - Bạn trao cho chúng tôi niềm tin còn chúng tôi dành hết
					tâm huyết cho ngôi nhà của bạn và trao trả cho bạn sự hài lòng"
				</p>

			</div>
		</div>


		<div class="procedure_container-items">
			<div class="procedure_container-items-bg"></div>
			<div class="container_body flex-column gap-5">
				<div class="row">
					<?php quy_trinh() ?>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-white">
		<div>
			<?php echo do_shortcode('[sp_testimonial id="108"]'); ?>
		</div>
	</div>

	<div class="contact_container bg-white">
		<div class="procedure_container-title bg-white">
			<div class="container_body flex-column">
				<h1><span>Liên hệ tư vấn dịch vụ</span> miễn phí!​</h1>
				<span></span>
				<p>Liên hệ ngay với Lavi House ngay để được đội ngũ Kiến Trúc Sư của chúng tôi tư vấn miễn phí cho bạn!</p>
				<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" style="fill:#e06d0f; margin: 5px 0 50px 0;" viewBox=" 0 0 448 512">
					<path d="M224 0c17.7 0 32 14.3 32 32l0 30.1 15-15c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-49 49 0 70.3 61.4-35.8 17.7-66.1c3.4-12.8 16.6-20.4 29.4-17s20.4 16.6 17 29.4l-5.2 19.3 23.6-13.8c15.3-8.9 34.9-3.7 43.8 11.5s3.8 34.9-11.5 43.8l-25.3 14.8 21.7 5.8c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17l-67.7-18.1L287.5 256l60.9 35.5 67.7-18.1c12.8-3.4 26 4.2 29.4 17s-4.2 26-17 29.4l-21.7 5.8 25.3 14.8c15.3 8.9 20.4 28.5 11.5 43.8s-28.5 20.4-43.8 11.5l-23.6-13.8 5.2 19.3c3.4 12.8-4.2 26-17 29.4s-26-4.2-29.4-17l-17.7-66.1L256 311.7l0 70.3 49 49c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-15-15 0 30.1c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-30.1-15 15c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l49-49 0-70.3-61.4 35.8-17.7 66.1c-3.4 12.8-16.6 20.4-29.4 17s-20.4-16.6-17-29.4l5.2-19.3L48.1 395.6c-15.3 8.9-34.9 3.7-43.8-11.5s-3.7-34.9 11.5-43.8l25.3-14.8-21.7-5.8c-12.8-3.4-20.4-16.6-17-29.4s16.6-20.4 29.4-17l67.7 18.1L160.5 256 99.6 220.5 31.9 238.6c-12.8 3.4-26-4.2-29.4-17s4.2-26 17-29.4l21.7-5.8L15.9 171.6C.6 162.7-4.5 143.1 4.4 127.9s28.5-20.4 43.8-11.5l23.6 13.8-5.2-19.3c-3.4-12.8 4.2-26 17-29.4s26 4.2 29.4 17l17.7 66.1L192 200.3l0-70.3L143 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l15 15L192 32c0-17.7 14.3-32 32-32z" />
				</svg>
			</div>
		</div>

		<div class="row container_body">
			<div class="col-6 p-2 contact-img">
				<?php
				$page_id = get_the_ID();
				$contact_img = get_field('contact_img', $page_id);
				if ($contact_img) {
					echo '<img src="' . esc_url($contact_img['url']) . '"/>';
				} else {
					echo "Không có ảnh";
				}
				?>
			</div>
			<div class="col-6 p-2">
				<div class="home-contact">
					<h5>Form Đăng ký Dịch vụ</h5>
					<?php echo do_shortcode('[contact-form-7 id="db89a73" title="Contact form 1"]') ?>
				</div>
			</div>
		</div>
	</div>




</main><!-- #main -->

<?php
get_footer();
