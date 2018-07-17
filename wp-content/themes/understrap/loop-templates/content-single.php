<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">
  <div class="col-md-12 no-gutter">
		<?php
        if (get_field('add_image_slider_or_video')== 'img') {
            $images = get_field('post_images_iris');

            if ($images): ?>
						<div class="owl-carousel post-slide">
								<?php foreach ($images as $image): ?>
									           <div class="post-slide-item">
															 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
															 <?php if ($image['caption']): ?>
															<div class="post-caption">
																<?php echo $image['caption']; ?>
															</div>
														<?php endif; ?>
									           </div>
								<?php endforeach; ?>
						</div>
				<?php endif;
        } elseif (get_field('add_image_slider_or_video')== 'vid') {
            $post_video = the_field('add_video_link');
            
        } ?>

</div>

	<header class="entry-header col-md-4">

		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

	</header><!-- .entry-header -->



	<div class="entry-content col-md-8">

		<div class="entry-meta">

			<time><?php echo get_the_date('j M Y'); ?></time>

		</div><!-- .entry-meta -->

		<?php the_content(); ?>

		<?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
            'after'  => '</div>',
        ));
        ?>


			</div>
	</div><!-- .entry-content -->


	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
