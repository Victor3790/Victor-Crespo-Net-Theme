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
			<?php the_content(); ?>
		</div>
		<div class="col-12 col-lg-3">
			<?php get_template_part( 'template-parts/project-links-sidebar' ); ?>
			<div class="mt-3"></div>
			<?php get_template_part( 'template-parts/contact-sidebar' ); ?>
		</div>
	</div>
</div>
