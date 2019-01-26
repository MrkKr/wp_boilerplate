<?php 

/**
 *	Single post looking like an article,
 *  with social media sharing
 *  and next/prev links.
 */

get_header(); ?>

<div id="content" class="wrapper site-top-margin">

	<div class="container single-content">

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="row">
				<!-- post meta content -->
				<div class="col-md-12 post-meta-container text-center">
					<h1 class="blog-post-title"><?php the_title(); ?></h1>
					<p class="post-meta mb-0"><?php echo get_the_date() ?></p>
				</div>
				<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
				<div class="post-image card-img-full-radius" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 post-content-container">
					<!-- post main content -->
					<?php the_content(); ?>

					<hr class="post-separator"></hr>

					<!-- prev navigation -->
					<div class="navigation text-center d-md-flex justify-content-between align-items-center mt-5">
						<div class="prev">
							<?php previous_post_link( '‹ %link', 'Prev', true ); ?>
						</div>

						<!-- next navigation -->
						<div class="next">
							<?php next_post_link( '%link ›', 'Next', true ); ?>
						</div>
					</div>
				</div>
			</div>

		<?php endwhile; ?>

		<?php else: ?>

		<h2 class="text-center">Page not found...</h2>
		<p>Unfortunately, the page you are looking for can not be found. Please check that you have entered in the correct address, you could also <a href="/">return to the homepage</a> and try again.</p>
		<?php get_search_form(); ?>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>