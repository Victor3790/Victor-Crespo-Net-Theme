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
						<div class="col">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
		<?php endwhile; ?>
	<?php else : ?>
		<h1>No Post</h1>
	<?php endif; ?>
<?php
get_footer();
