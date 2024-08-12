<?php
/**
 * The main functions file
 *
 * @package victor-crespo-net-theme
 */

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
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="post__breadcrumbs mb-3">
								<a class="post__breadcrumbs-link" href="<?php echo esc_url( home_url() ); ?>">Home</a> /
								<?php the_category( ' / ' ); ?> /
								<span><?php the_title(); ?></span>
							</div>
							<img class="mb-5" style="display: block; width: 100%;" src="img/post.png">
							<?php the_content(); ?>
						</div>
						<div class="col-12 col-lg-3">
							<?php get_template_part( 'template-parts/post-categories-sidebar' ); ?>
						</div>
					</div>
				</div>
		<?php endwhile; ?>
	<?php else : ?>
		<h1>No Post</h1>
	<?php endif; ?>
<?php
get_footer();
