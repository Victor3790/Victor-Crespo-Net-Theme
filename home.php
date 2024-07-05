<?php
/**
 * The archive file
 *
 * @package victor-crespo-net-theme
 */

get_header();
?>
	<!-- Archive -->
	<div class="container" style="min-height: 100vh; padding-top: 100px;">
		<div class="row">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="post">
							<a class="post__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<h1>No Posts Found</h1>
			<?php endif; ?>
		</div>
	</div>
	<?php get_template_part( 'template-parts/pagination' ); ?>
<?php
get_footer();
