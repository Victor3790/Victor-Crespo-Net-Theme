<?php
/**
 * Post content.
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}
?>
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-9">
			<div class="post__breadcrumbs mb-3">
				<a class="post__breadcrumbs-link" href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'vcnt' ); ?></a> /
				<?php the_category( ' / ', 'multiple' ); ?> /
				<span><?php the_title(); ?></span>
			</div>
			<?php the_content(); ?>
		</div>
		<div class="col-12 col-lg-3">
			<?php get_template_part( 'template-parts/recent-posts-sidebar' ); ?>
			<?php get_template_part( 'template-parts/post-categories-sidebar' ); ?>
		</div>
	</div>
</div>
