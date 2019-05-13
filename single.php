<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<section id="main">
	<div class="container">
		<div class="row">
			<img src="<?php echo $backgroundImg[0] ?>" alt="">
			<div class="<?=FULLWIDTH?>">				
				<?php get_template_part('template-parts/content', 'single'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>