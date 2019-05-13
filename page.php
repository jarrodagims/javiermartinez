<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<?php
                $thumbnail_id = get_post_thumbnail_id( $post->ID );
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>

<section id="main">
	<div class="container">
		<div class="row">			 	         
			<img src="<?php echo $backgroundImg[0] ?>" alt="<?php echo $alt ?>" />>
			<div class="<?=FULLWIDTH?>">				
				<?php get_template_part('template-parts/content', 'page'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>