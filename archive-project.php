<?php
/**
 * The archive file
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

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
								<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'vcnt' ); ?></a>
							</div>
					<?php endwhile; ?>
					<?php get_template_part( 'template-parts/pagination' ); ?>
				<?php else : ?>
					<h1><?php esc_html_e( 'No posts found', 'vcnt' ); ?></h1>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-3">
				<?php get_template_part( 'template-parts/links-sidebar' ); ?>
				<?php get_template_part( 'template-parts/contact-sidebar' ); ?>
			</div>
		</div>
	</div>
<?php
get_footer();
