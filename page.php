<?php get_header(); ?>
<div class="container pt-3 pb-3">
	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>


		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<?php the_content('Read the rest of this entry &raquo;'); ?>

	<?php endwhile; ?>

	<?php else: ?>

	<h2 class="text-center">Not Found</h2>
	<p class="text-center">Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div>
<?php get_footer(); ?>
