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
			<div class="col-12 col-lg-9">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
							<div class="post">
								<a class="post__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p class="post__excerpt">
									<?php the_excerpt(); ?>
								</p>
								<a href="<?php the_permalink(); ?>">Leer más</a>
							</div>
					<?php endwhile; ?>
					<?php get_template_part( 'template-parts/pagination' ); ?>
				<?php else : ?>
					<h1>No Posts Found</h1>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-3">
				<?php get_template_part( 'template-parts/post-categories-sidebar' ); ?>
			</div>
		</div>
	</div>
<?php
get_footer();
