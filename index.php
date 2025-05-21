<?php
/**
 * The main functions file
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

get_header();
?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
				<!-- Title -->
				<div class="post__title-container">
					<div class="container">
						<div class="row">
							<div class="col">
								<h1 class="post__title">
									<?php the_title(); ?>
								</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- Content -->
				<?php get_template_part( 'template-parts/content-' . get_post_type() ); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<h1>No Post</h1>
	<?php endif; ?>
<?php
get_footer();
